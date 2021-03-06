<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;
    
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }

    public function profils(){
        return $this->belongsToMany(Profil::class);
    }
    
}
