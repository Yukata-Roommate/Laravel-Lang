<?php

namespace YukataRm\Laravel\Lang\Middlewares;

use YukataRm\Laravel\Middleware\BaseMiddleware;

use Symfony\Component\HttpFoundation\Response;

/**
 * Set Locale Middleware
 *
 * @package YukataRm\Laravel\Lang\Middlewares
 */
abstract class SetLocale extends BaseMiddleware
{
    /*----------------------------------------*
     * Handle
     *----------------------------------------*/

    /**
     * whether run middleware handle
     *
     * @return bool
     */
    #[\Override]
    protected function isRunHandle(): bool
    {
        if ($this->hasLocalization()) return true;

        return in_array($this->getLocale(), $this->acceptLocales());
    }

    /**
     * run the middleware handle
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function runHandle(): Response
    {
        $this->setLocale();

        return $this->next();
    }

    /*----------------------------------------*
     * Locale
     *----------------------------------------*/

    /**
     * whether session has localization
     *
     * @return bool
     */
    protected function hasLocalization(): bool
    {
        return session()->has("localization");
    }

    /**
     * set locale
     *
     * @return void
     */
    protected function setLocale(): void
    {
        if (!$this->hasLocalization() || $this->getLocale() !== session()->get("localization")) session()->put("localization", $this->getLocale());

        app()->setLocale(session()->get("localization"));
    }

    /**
     * get locale
     *
     * @return string
     */
    abstract protected function getLocale(): string;

    /**
     * get accept locales
     *
     * @return array<string>
     */
    abstract protected function acceptLocales(): array;
}
