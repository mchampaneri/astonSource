<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function admin()
    {
        $department_count = Department::count();
        $user_count = User::count();

        return view('workspace.admin.dashboard.index')
            ->with(['department_count' => $department_count,
                    'user_count' => $user_count]);
    }
}
