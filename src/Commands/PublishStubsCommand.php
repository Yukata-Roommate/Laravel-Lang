<?php

namespace YukataRm\Laravel\Lang\Commands;

use YukataRm\Laravel\Command\PublishStubsCommand as BaseCommand;

/**
 * Publish Stubs Command
 *
 * @package YukataRm\Laravel\Lang\Commands
 */
class PublishStubsCommand extends BaseCommand
{
    /**
     * command signature
     *
     * @var string
     */
    protected $signature = "lang:publish";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Publish lang resources";

    /*----------------------------------------*
     * Parameter
     *----------------------------------------*/

    /**
     * set parameter
     *
     * @return void
     */
    protected function setParameter(): void {}

    /*----------------------------------------*
     * Process
     *----------------------------------------*/

    /**
     * assets name
     *
     * @var string
     */
    protected string $assetsName = "lang";

    /**
     * stubs directory path
     *
     * @var string
     */
    protected string $stubsDirectory = __DIR__ . "/../../stubs";
}
