<?php

namespace YukataRm\Laravel\Lang;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use YukataRm\Laravel\Lang\Commands\PublishStubsCommand;

use YukataRm\Laravel\Lang\Translation\Merger;
use Illuminate\Support\Facades\Lang;

/**
 * Lang Service Provider
 *
 * @package YukataRm\Laravel\Lang
 */
class ServiceProvider extends BaseServiceProvider
{
    /*----------------------------------------*
     * Boot
     *----------------------------------------*/

    /**
     * boot
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootCommands();
        $this->bootMergedTranslations();
    }

    /**
     * boot commands
     *
     * @return void
     */
    protected function bootCommands(): void
    {
        if (!$this->app->runningInConsole()) return;

        $this->commands([
            PublishStubsCommand::class,
        ]);
    }

    /**
     * boot merged translations
     *
     * @return void
     */
    protected function bootMergedTranslations(): void
    {
        $paths = [
            __DIR__ . "/../langs",
            lang_path(),
        ];

        $merger = new Merger();

        $merger->setPaths($paths);

        foreach ($merger->get() as [$locale, $translations]) {
            Lang::addLines($translations, $locale, "*");
        }
    }
}
