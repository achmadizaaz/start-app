<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('users.roles.index',compact('roles'));
    }

    public function store(RoleRequest $request)
    {
        Role::create($request->all());

        return back()->with('success', 'Role berhasil ditambahkan!');
    }

    public function destroy($name)
    {
        Role::where('name', $name)->delete();

        return back()->with('success', 'Role berhasil dihapus!');
    }
    

}
