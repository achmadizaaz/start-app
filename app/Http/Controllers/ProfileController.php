<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = auth()->user();

        return view('backend.profile.index', compact('profile'));
    }

    public function edit()
    {
        $profile = auth()->user();
        return view('backend.profile.edit', compact('profile'));
    }
}
