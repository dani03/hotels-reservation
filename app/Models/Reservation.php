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

    const STATUS_ACTIVE = 1;
    const STATUS_CANCELLED = 2;
   public function user(){

    return $this->belongsTo(User::class);
   
  }

   public function office(){
 
    return $this->belongsTo(Office::class);
   }
}
