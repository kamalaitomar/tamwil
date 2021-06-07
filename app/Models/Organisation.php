<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{

    use HasFactory;

    protected $fillable = [
        'nom_organisation',
        'email',
        'tel',
        'adresse',
        'web_site',
        'type_organisme',
        'logo'
    
        ];
    
        protected $table ="organisations";

    public function offres(){
        return $this->belongsToMany(Offre::class);
    }
    public function besoins(){
        return $this->belongsToMany(Besoin::class,'besoin_key', 'organisation_key');
    }
}

