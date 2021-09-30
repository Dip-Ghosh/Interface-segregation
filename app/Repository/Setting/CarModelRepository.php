<?php

namespace App\Repository\Setting;


use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;

class CarModelRepository extends BaseRepository implements CarModelInterface, BaseInterface
{

    private $carModel;

    public function __construct(CarModel $carModel)
    {
        parent::__construct($carModel);
        $this->carModel = $carModel;
    }

}
