<?php

namespace App\Providers;

use App\Department;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

      // Admin Workspace Menu ServiceProvider
          $this->Admin_Workspace_Menus();
      // Faculty Workspace Menu ServiceProvider
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

    public function Admin_Workspace_Menus()
    {
        // Generates Menu for the department
       view()->composer('workspace.admin.department.page_menu', function ($view) {
           $departments = Department::all();
           $view->with('departments', $departments);
       });
    }

    public function Faculty_Workspace_Menus()
    {
    }
}
