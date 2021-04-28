<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    
    public function organisations(){
        return $this->belongsToMany(Organisation::class);
    }

    public function profils(){
        return $this->belongsToMany(Profil::class);
    }

    public function cycles(){
        return $this->belongsToMany(Cycle::class);
    }

    public function besoins(){
        return $this->belongsToMany(Besoin::class);
    }

    public function secteursActivite(){
        return $this->belongsToMany(SecteurActivite::class);
    }

    public function chiffreAffaires(){
        return $this->belongsToMany(ChiffreAffaire::class);
    }

    public function regions(){
        return $this->belongsToMany(Region::class);
    }
}
