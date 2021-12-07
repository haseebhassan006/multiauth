<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Masjid;

class MasjidRequest extends Model
{
   protected $table = 'masjid_requests';

   public function category(){

   	return $this->belongsTo(Category::class);
   }

   public function applicant(){
   	return $this->belongsTo(Masjid::class,'masjid_id','id');
   }
}
