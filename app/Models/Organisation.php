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

    /*
     accesssors 
    */ 

    public function getNameAttribute() {
        return $this->{'nom_organisation_'.app()->getLocale()};
    }
    
    public function getAdresseAttribute() {
        return $this->{'adresse_'.app()->getLocale()};
    }

    public function getTypeAttribute() {
        return $this->{'type_d_organisation_'.app()->getLocale()};
    }

    public function getPresentationAttribute() {
        return $this->{'presentation_'.app()->getLocale()};
    }

}

