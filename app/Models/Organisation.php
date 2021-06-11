<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }
    public function besoins(){
        return $this->belongsToMany(Besoin::class);
    }

}

