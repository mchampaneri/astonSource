<?php

namespace  Aston;

use Illuminate\Support\ServiceProvider;

class AstoCoreProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Registering the layouts of the
         * aston core
         *
         */
        $this->app['view']->addNameSpace('AstonLayouts',base_path('core/Layouts'));
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
