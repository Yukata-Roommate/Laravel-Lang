<?php

namespace YukataRm\Laravel\Lang\Translation;

/**
 * Translation Merger
 *
 * @package YukataRm\Laravel\Lang\Translation
 */
class Merger
{
    /*----------------------------------------*
     * Path
     *----------------------------------------*/

    /**
     * lang paths
     *
     * @var array<string>
     */
    protected array $paths = [];

    /**
     * set paths
     *
     * @param array<string> $paths
     * @return void
     */
    public function setPaths(array $paths): void
    {
        $this->paths = array_filter($paths, function ($path) {
            return is_dir($path);
        });
    }

    /**
     * get paths
     *
     * @return \Generator<string>
     */
    protected function getPaths(): \Generator
    {
        foreach ($this->paths as $path) {
            if (!is_dir($path)) continue;

            yield $path;
        }
    }

    /**
     * get locale paths
     *
     * @param string $locale
     * @return \Generator<string>
     */
    protected function getLocalePaths(string $locale): \Generator
    {
        foreach ($this->getPaths() as $path) {
            $localePath = $path . DIRECTORY_SEPARATOR . $locale;

            if (!is_dir($localePath)) continue;

            yield $localePath;
        }
    }

    /*----------------------------------------*
     * Translation
     *----------------------------------------*/

    /**
     * get translations
     *
     * @return \Generator<array>
     */
    public function get(): \Generator
    {
        foreach ($this->getLocales() as $locale) {
            $translations = [];

            foreach ($this->getGroups($locale) as $group) {
                $mergedTranslations = $this->getMergedTranslations($locale, $group);

                if (empty($mergedTranslations)) continue;

                $translations[$group] = $mergedTranslations;
            }

            if (empty($translations)) continue;

            $flattenedTranslations = $this->flattenTranslations($translations);

            yield [$locale, $flattenedTranslations];
        }
    }

    /**
     * get locales
     *
     * @return \Generator<string>
     */
    protected function getLocales(): \Generator
    {
        $yielded = [];

        foreach ($this->getPaths() as $path) {
            $localePaths = glob("{$path}/*", GLOB_ONLYDIR);

            foreach ($localePaths as $localePath) {
                $locale = basename($localePath);

                if (in_array($locale, $yielded)) continue;

                if (!preg_match("/^[a-z]{2}(_[A-Z]{2})?$/", $locale)) continue;

                $yielded[] = $locale;

                yield $locale;
            }
        }
    }

    /**
     * get groups
     *
     * @param string $locale
     * @return \Generator<string>
     */
    protected function getGroups(string $locale): \Generator
    {
        $yielded = [];

        foreach ($this->getLocalePaths($locale) as $path) {
            $directoryPaths = glob("{$path}/*", GLOB_ONLYDIR);

            foreach ($directoryPaths as $directoryPath) {
                $group = basename($directoryPath);

                if (in_array($group, $yielded)) continue;

                $yielded[] = $group;

                yield $group;
            }

            $filePaths = glob("{$path}/*.php");

            foreach ($filePaths as $filePath) {
                $group = pathinfo($filePath, PATHINFO_FILENAME);

                if (in_array($group, $yielded)) continue;

                $yielded[] = $group;

                yield $group;
            }
        }
    }

    /**
     * get merged translations
     *
     * @param string $locale
     * @param string $group
     * @return array<string, mixed>
     */
    protected function getMergedTranslations(string $locale, string $group): array
    {
        $translations = [];

        foreach ($this->getGroupTranslations($locale, $group) as $groupTranslations) {
            $translations = $this->mergeTranslations($translations, $groupTranslations);
        }

        return $translations;
    }

    /**
     * get group translations
     *
     * @param string $locale
     * @param string $group
     * @return \Generator<array<string, mixed>>
     */
    protected function getGroupTranslations(string $locale, string $group): \Generator
    {
        foreach ($this->getLocalePaths($locale) as $path) {
            $directoryPath = $path . DIRECTORY_SEPARATOR . $group;

            if (is_dir($directoryPath)) {
                $filePaths = glob("{$directoryPath}/*.php");

                sort($filePaths);

                foreach ($filePaths as $filePath) {
                    if (!is_file($filePath)) continue;

                    $translations = require $filePath;

                    if (!is_array($translations)) continue;

                    $subGroup = pathinfo($filePath, PATHINFO_FILENAME);

                    yield [$subGroup => $translations];
                }
            }

            $filePath = "{$directoryPath}.php";

            if (file_exists($filePath) && is_file($filePath)) {
                $translations = require $filePath;

                if (!is_array($translations)) continue;

                yield $translations;
            }
        }
    }

    /**
     * merge translations recursively
     *
     * @param array<string, mixed> $source
     * @param array<string, mixed> $target
     * @return array<string, mixed>
     */
    protected function mergeTranslations(array $source, array $target): array
    {
        foreach ($target as $key => $value) {
            if (is_array($value) && isset($source[$key]) && is_array($source[$key])) {
                $source[$key] = $this->mergeTranslations($source[$key], $value);
            } else {
                $source[$key] = $value;
            }
        }

        return $source;
    }

    /**
     * flatten translations
     * 
     * @param array<string, mixed> $translations
     * @return array<string, string>
     */
    protected function flattenTranslations(array $translations): array
    {
        $result = [];

        foreach ($translations as $group => $groupTranslations) {
            $flattened = $this->flattenTranslations($groupTranslations, $group);

            $result = array_merge($result, $flattened);
        }

        return $result;
    }

    /**
     * flatten translations with group prefix
     *
     * @param array<string, mixed> $translations
     * @param string $prefix
     * @return array<string, string>
     */
    protected function flattenTranslationsWithGroup(array $translations, string $prefix = ""): array
    {
        $result = [];

        foreach ($translations as $key => $value) {
            $newKey = $prefix === "" ? $key : "{$prefix}.{$key}";

            if (is_array($value)) {
                $result = array_merge($result, $this->flattenTranslations($value, $newKey));
            } else {
                $result[$newKey] = $value;
            }
        }

        return $result;
    }
}
