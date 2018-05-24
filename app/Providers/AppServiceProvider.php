<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Message;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layouts.app_with_title_and_stats', function($view)
        {
            $firstMessage = Message::orderBy('created_at', 'asc')->first();
            $latestMessage = Message::orderBy('created_at', 'desc')->first();
            $view->with('stats', [
                'total' => Message::all()->count(),
                'firstDate' => $firstMessage->created_at,
                'firstAuthor' => $firstMessage->user->name,
                'latestDate' => $latestMessage->created_at,
                'latestAuthor' => $latestMessage->user->name,
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
