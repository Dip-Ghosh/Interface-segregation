<?php

namespace App\Repository\Setting;



use App\Models\Location;

class LocationRepository implements LocationInterface
{
    protected $model;

    public function __construct(Location $model)
    {
        parent::__construct($model);
    }






}
