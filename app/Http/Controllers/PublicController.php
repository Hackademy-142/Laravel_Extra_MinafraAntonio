<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Chirp;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function edit(Chirp $chirp)
    {

        return view('edit-form', compact('chirp'));
    }
}
