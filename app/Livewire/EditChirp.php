<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EditChirp extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il campo è obbligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 5 caratteri.')]
    public $content;

    public $img;

    public $chirp;

    public function mount (){
        $this->content = $this->chirp->content;
        $this->img = $this->chirp->img;
    }

    public function updateChirp()
{
    $this->validate();

    // Inizializzo una variabile per il percorso dell'immagine
    $path = $this->chirp->img;

    /* trovata su internet che mi risolve il problema della modifica dell img  */
    if ($this->img instanceof \Illuminate\Http\UploadedFile) {
        // Carica l'immagine e ottieni il percorso
        $path = $this->img->store('public');
    }

    // Aggiorno il chirp con il nuovo contenuto e il percorso dell'immagine
    $this->chirp->update([
        'content' => $this->content,
        'img' => $path,
    ]);

    $this->reset();

    session()->flash('message', 'Articolo aggiornato correttamente');
}



    public function render()
    {
        return view('livewire.edit-chirp');
    }
}