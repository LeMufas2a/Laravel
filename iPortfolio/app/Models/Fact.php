<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;
    protected $table = 'facts';

    protected $fillable = [
        'icone',
        'chiffre',
        'texte',
    ];
}