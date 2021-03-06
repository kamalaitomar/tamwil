<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }
    public function organisations(){
        return $this->belongsToMany(Organisation::class);
    }
}