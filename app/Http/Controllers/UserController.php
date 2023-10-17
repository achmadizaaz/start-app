<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Menampilkan semua users
    public function index()
    {
        // Get data users
        $users = User::latest()->get();

        return view('users.index', compact('users'));
    }

    // Menampilkan form penambahan user baru
    public function create()
    {
        return view('users.create');
    }

    // Menambahakan user baru
    public function store(UserStoreRequest $request)
    {
        // Insert data user baru
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    // Menampilkan detail user
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Menampilkan form edit user
    public function edit(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Mengupdate data user
    public function  update(UserUpdateRequest $request, User $user)
    {
        // Memperbarui data user
        $user->update();

        return redirect()->route('users.show', $user->slug)->with('success', 'User berhasil diperbarui');
    }

    // Menghapus User
    public function destroy(User $user)
    {
        // Menghapus media / file gambar user
        Storage::delete($user->image);

        // Menghapus data user
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }

}
