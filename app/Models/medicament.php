<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicament extends Model
{
    use HasFactory;
    protected $fillable = ['NOM','PRESENTATION'];
}
