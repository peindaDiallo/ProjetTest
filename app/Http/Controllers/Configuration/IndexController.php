<?php

namespace App\Http\Controllers\Configuration;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
    public function index(): Factory|View|Application
    {
        $users = User::all()->count();
        $role = Role::all()->count();
        $permission = Permission::all()->count();
        return view('Admin.index', compact('users', 'role', 'permission'));

    }
}
