<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home() {

        return view('welcome');
    }

    public function edit(Chirp $chirp)
    {

        return view('edit-form', compact('chirp'));
    }

    public function showProfile(){

        $user = Auth::user();
        $chirp = Chirp::all();

        return view( 'profile.profile-show', compact('user', 'chirp'));

    }
}
