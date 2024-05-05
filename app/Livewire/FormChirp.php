<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Chirp;
use Livewire\Component;
use App\Models\ChirpTag;
use Illuminate\Http\Request;
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

    public $name;

    public function store()
    {

        $this->validate();

        $path = $this->img ? $this->img->store('public') : null; // Salva l'immagine nella directory 'public'

        $chirp = Chirp::create([
            'content' => $this->content,
            'img' => $path, // Salva il percorso dell'immagine nel database
            'user_id' => Auth::user()->id
        ]);

        /* condizione se il tag è gia presente nel database o no */

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
        /* vado a riempire le colonne della tabella pivot */
        ChirpTag::create([
            'chirp_id' => $chirp->id,
            'tag_id' => $id
        ]);

        session()->flash('message', 'Post creato');
        $this->reset();
    }



    public function render()
    {
        $user= Auth::user();

        return view('livewire.form-chirp', compact('user'));
    }
}