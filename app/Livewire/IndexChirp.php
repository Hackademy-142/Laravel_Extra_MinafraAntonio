<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Chirp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexChirp extends Component
{
    public function destroy(Chirp $chirp){

        $chirp->tags()->detach();
        $chirp->delete();
    }

    public function render()
    {
        $chirp= Chirp::all();

        return view('livewire.index-chirp', compact('chirp'));
    }
}
