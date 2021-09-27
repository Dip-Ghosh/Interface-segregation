<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'car_type',
        'car_brand',
        'car_model',
        'car_color',
        'license_plate_number',
        'registration_number',
        'fitness_certificate',
        'tax_token',
        'insurance_paper',
        'car_image',
        'interest_in_rental_service'

    ];
}
