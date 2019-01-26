<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immagine extends Model
{
    protected $fillable = ['link', 'articolo_id'];
}
