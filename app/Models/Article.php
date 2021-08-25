<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /*
     accesssors 
    */ 

    public function getTitleAttribute() {
        return $this->{'title_'.app()->getLocale()};
    }

    public function getContentAttribute() {
        return $this->{'content_'.app()->getLocale()};
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
