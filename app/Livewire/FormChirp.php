<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class FormChirp extends Component
{
    #[Validate('required', message: 'Il campo è obligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 3 caratteri.')]
    public $content;

    public $img;

    public function store()
    {
        $this->validate();

        Chirp::create([
            'content' => $this->content,
            'img' => $this->img,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('message', 'Articolo creato');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-chirp');
    }
}
