<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Chirp;
use Livewire\Component;
use Illuminate\Http\Request;
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

    public $name;

    public $tag;

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

    if(empty($this->name)){
        $id = null;
    } elseif (!Tag::where('name', $this->name)->exists()){

        $tag= Tag::create([
            'name' => $this->name
        ]);

        $id = $tag['id'];

    }else{
        $tag = Tag::where('name' ,$this->name)->first();
        $id = $tag->id;

    }
    $this->chirp->tags()->sync($id);

    /* $this->reset(); */

    session()->flash('message', 'Articolo aggiornato correttamente');
}



    public function render()
    {
        $tags = Tag::all();

        return view('livewire.edit-chirp', compact('tags'));
    }
}