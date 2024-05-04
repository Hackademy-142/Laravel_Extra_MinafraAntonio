<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;

class IndexChirp extends Component
{
    public function destroy(Chirp $chirp){

        $chirp->delete();

    }

    public function render()
    {
        $chirp= Chirp::all();

        return view('livewire.index-chirp', compact('chirp'));
    }
}
