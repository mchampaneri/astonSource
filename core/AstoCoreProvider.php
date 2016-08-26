<?php

namespace  Aston;

use App\Department;
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
        app()->singleton('departments', function()
        {
            return Department::all(['name','id']);
        });
    }
}
