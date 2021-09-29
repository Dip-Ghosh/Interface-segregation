<?php

namespace App\Repository\Setting;

use App\Models\Location;
use App\Repository\Base\BaseInterface;
use App\Repository\Base\BaseRepository;

class LocationRepository extends BaseRepository implements LocationInterface, BaseInterface
{
    protected $model;

    public function __construct(Location $model)
    {
        parent::__construct($model);
    }






}
