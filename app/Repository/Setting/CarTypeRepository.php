<?php

namespace App\Repository\Setting;

use App\Models\CarType;
use App\Repository\Base\BaseInterface;
use App\Repository\Base\BaseRepository;


class CarTypeRepository extends BaseRepository implements CarTypeInterface, BaseInterface
{

    protected $carType;

    public function __construct(CarType $carType)
    {
        parent::__construct($carType);
        $this->carType = $carType;
    }
    public function fetchActiveCarType($status,$orderBy){

      return $this->carType->where('status', '=',$status)
          ->orderBy('name', $orderBy)
          ->get();
    }


}
