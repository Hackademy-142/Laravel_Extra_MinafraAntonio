<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads; // Importa il trait WithFileUploads

class FormChirp extends Component
{
    use WithFileUploads; // Utilizza il trait WithFileUploads

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 5 caratteri.')]
    public $content;

    public $img;

    public function store()
    {
        $this->validate();

        $this->validate([
            'img' => 'image|max:1024', // Validazione per il caricamento dell'immagine
        ]);

        $path = $this->img->store('public'); // Salva l'immagine nella directory 'public'

        Chirp::create([
            'content' => $this->content,
            'img' => $path, // Salva il percorso dell'immagine nel database
            'user_id' => Auth::user()->id
        ]);

        session()->flash('message', 'Articolo creato');
        $this->reset();
    }

    public function render()
    {
        $chirps = Chirp::all();
        return view('livewire.form-chirp', compact('chirps'));
    }
}