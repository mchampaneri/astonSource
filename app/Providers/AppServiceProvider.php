<?php

namespace App\Providers;

use App\Department;
use App\Faculty;
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
          $this->Faculty_Workspace_Menus();
      // Student Workspace Menu ServiceProvider
          $this->Student_Workspace_Menus();
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
       view()->composer('workspace.admin.department.page_menu',function($view){
            $departments = Department::all();
            $view->with('departments',$departments);
       });
    }

    public function Faculty_Workspace_Menus()
    {
      view()->composer('workspace.faculty.assingments.page_menu',function($view){
            $subjects = \Auth::user()->asFaculty()->first()->subjects()->get();
            $view->with('subjects',$subjects);
      });

    }

    public function Student_Workspace_Menus()
    {
        view()->composer('workspace.student.assingments.page_menu',function($view){
            $subjects = \Auth::user()->asStudent()->first()->subjects()->get();
            $view->with('subjects',$subjects);
        });
    }
}
