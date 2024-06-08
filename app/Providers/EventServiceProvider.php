<?php

namespace App\Providers;
use App\Events\SubmissionSaved;
use App\Listeners\LogSubmissionSaved;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $listen = [
        SubmissionSaved::class => [
            LogSubmissionSaved::class,
        ],
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
