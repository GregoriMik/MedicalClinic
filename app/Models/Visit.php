<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'doctor_id','patient_id','date'
    ];
    public function doctor(){
        return $this->belongsTo(User::class,'doctor_id');
    }
    public function patient(){
        return $this->belongsTo(User::class,'patient_id');
    }
    

}
