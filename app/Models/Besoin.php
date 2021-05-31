<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    protected $fillable = [
        'nom_besoin'
        
        ];
        
        protected $table ="besoins";
    use HasFactory;
    public function offres(){
        return $this->belongsToMany(Offre::class);
    }
    public function organisations(){
        return $this->belongsToMany(Organisation::class,'organisation_key', 'besoin_key');
    }
}
