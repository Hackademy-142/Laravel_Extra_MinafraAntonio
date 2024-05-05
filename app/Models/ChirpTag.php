<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChirpTag extends Model
{
    use HasFactory;

    protected $table = 'chirp_tag';

    /* ho creato un model per gestire la tabella pivot nel database */
    protected $fillable = [
        'chirp_id',
        'tag_id'
    ];

}
