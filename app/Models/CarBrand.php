<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'car_type_id',
        'name',
        'status'
    ];
    public function cartype(){
        return $this->belongsTo(CarType::class,'car_type_id');
    }
}
