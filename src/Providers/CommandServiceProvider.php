<?php

namespace Grilar\GitCommitChecker\Providers;

use Grilar\GitCommitChecker\Commands\InstallCommand;
use Grilar\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
