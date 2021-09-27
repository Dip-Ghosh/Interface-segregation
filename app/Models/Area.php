<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;


class Area extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'location_id',
        'name',
        'status'

    ];
    public function location(){
        return $this->belongsTo(Location::class,'location_id');
    }
}
