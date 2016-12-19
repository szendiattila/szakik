<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::paginate();

        return view('dashboard.role.index', compact('roles'));
    }

    public function create()
    {
        return view('dashboard.role.create');
    }

    public function store(RoleRequest $request)
    {
        Role::create($request->all());

        return redirect('dashboard/role');
    }

    public function edit(Role $role)
    {
        return view('dashboard.role.edit', compact('role'));
    }

    public function update(Role $role, RoleRequest $request)
    {
        $role->update($request->all());

        return redirect('dashboard/role');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect('dashboard/role');
    }
}
