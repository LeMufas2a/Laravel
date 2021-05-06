<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    use HasFactory;
    protected $table = 'bibliotheques';
    protected $fillable = [
        'nom',
        'adresse',
        'num'
    ];
    protected $hidden = [
        'adresse',
        'num'
    ];
}
