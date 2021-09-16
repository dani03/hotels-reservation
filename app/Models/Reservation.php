<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'integer',
        'start_date' => 'immutable_date',
        'end_date' => 'immutable_date',
        'status' => 'integer',
    ];
   public function user(){

    return $this->belongsTo(User::class);
   
  }

   public function office(){
 
    return $this->belongsTo(Office::class);
   }
}
