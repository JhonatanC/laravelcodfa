<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * recibe 2 parametros
         * 1. la vista o las vistas.
         * 2. Namespace del view composer
         */
        View::composer(
            [
                'front.index',
                'front.article',
                'front.content',
            ],'App\Http\ViewComposers\AsideComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
