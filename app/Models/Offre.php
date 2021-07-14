<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Offre extends Model
{
    use HasFactory;
    // protected $appends = ['name', 'objet', 'condition', 'description'];

    
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


    /*
     accesssors 
    */ 

    public function getNameAttribute() {
        return $this->{'nom_offre_'.app()->getLocale()};
    }
    
    public function getObjetAttribute() {
        return $this->{'objet_'.app()->getLocale()};
    }

    public function getConditionAttribute() {
        return $this->{'condition_'.app()->getLocale()};
    }

    public function getDescriptionAttribute() {
        return $this->{'description_'.app()->getLocale()};
    }
}
