<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $appends =['title', 'content'];

    /*
     accesssors 
    */ 

    public function getTitleAttribute() {
        if (app()->getLocale()) {
            return $this->{'title_'.app()->getLocale()};
        }else{
            return $this->{'title_fr'};
        }
    }

    public function getContentAttribute() {
        if (app()->getLocale()) {
            return $this->{'content_'.app()->getLocale()};
        }else{
            return $this->{'content_fr'};
    }
    }

    // date Time 

    public function get_short_created_at()
  {
	    $date = $this->get_attribute('created_at');
	   	if (is_string($date)){
	   		$dateObject = DateTime::createFromFormat('Y-m-d H:i:s', $date);
	   		return $dateObject->format('Y-m-d');
	   	}
    	return $date;
	}
    
}
