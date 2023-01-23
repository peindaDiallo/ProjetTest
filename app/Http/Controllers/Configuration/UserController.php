<?php

namespace App\Http\Controllers\Configuration;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
   public function index()
   {
      // $users = User::all();
       $roles = Role::pluck('name', 'name')->all();
       $users = DB::table('users')->paginate(2);
       return view('pages.configuration.user.index', compact('users', 'roles'));
   }

    public function create(): Factory|View|Application
    {
        $roles = Role::pluck('name','name')->all();
        $permissions = Permission::pluck('name','name')->all();
        return view('pages.configuration.user.create',compact('roles','permissions'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $user->givePermissionTo($request->input('permissions'));

        return redirect()->route('admin.users.index')->with('toast_success',Lang::get('user.create_message'));
    }

    public function show(User $user): Factory|View|Application
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('pages.configuration.user.role', compact('user', 'roles', 'permissions'));
    }

    public function edit($id): Factory|View|Application
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','name')->all();
        $permissions = Permission::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $userPermission = $user->permissions->pluck('name','name')->all();

        return view('pages.configuration.user.edit',compact('user','roles','userRole', 'permissions', 'userPermission'));
    }
    public function profil(int $id): Factory|View|Application
    {
        $user = User::findOrFail($id);
        $userRole = $user->roles->pluck('name','name')->all();

        return view('admin.users.profil',compact('user','userRole'));
    }

    public function updatePassword(Request $request, int $id): RedirectResponse
    {
        $this->validate($request, [
            'old-password' => 'required',
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();
        $user = User::findOrFail($id);
        if(!Hash::check($request->get('old-password'), $user->password)){

            return back()->with('toast_error', Lang::get('user.password_incorrect_message'));
        }
        $input['password'] = Hash::make($input['password']);
        $user->update($input);
        Auth::login($user);
        return back()->with('toast_success', Lang::get('user.password_changed_message'));
    }
    public function update(Request $request, int $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $input = $request->all();
        $user = User::findOrFail($id);
        $user->update($input);
        if($request->input('roles') != null ){
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            DB::table('model_has_permissions')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
            $user->givePermissionTo($request->input('permissions'));
        }

        return redirect()->route('admin.users.index')->with('toast_success',Lang::get('user.update_message'));
    }

    public function assignRole(Request $request, User $user): RedirectResponse
    {
        if ($user->hasRole($request->role)) {

            return back()->with('toast_error',Lang::get('role.role_exists_message'));
        }

        $user->assignRole($request->role);

        return back()->with('toast_success',  Lang::get('role.role_assigned_message'));
    }

    public function removeRole(User $user, Role $role): RedirectResponse
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);

            return back()->with('toast_success',  Lang::get('role.role_removed_message'));
        }

        return back()->with('toast_error',  Lang::get('role.role_not_exists_message'));

    }

    public function givePermission(Request $request, User $user): RedirectResponse
    {

        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('toast_error',  Lang::get('permission.permission_exists_message'));
        }
        $user->givePermissionTo($request->permission);
        return back()->with('toast_success',  Lang::get('permission.permission_added_message'));
    }

    public function revokePermission(User $user, Permission $permission): RedirectResponse
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('toast_success',  Lang::get('permission.permission_revoked_message'));
        }
        return back()->with('toast_error',  Lang::get('permission.permission_not_exists_message'));
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->hasRole('Admin')) {
            return back()->with('toast_success', Lang::get('role.is_admin_message'));
        }
        $user->delete();

        return redirect()->route('admin.users.index')->with('toast_error', Lang::get('user.delete_message'));
    }
}
