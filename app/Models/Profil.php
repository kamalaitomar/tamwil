<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }

    public function cycles(){
        return $this->belongsToMany(Cycle::class);
    }
}
