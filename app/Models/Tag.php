<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    //definisco relazione dei tag con i chirp
    public function chirps()
    {
        return $this->belongsToMany(Chirp::class);
    }
}
