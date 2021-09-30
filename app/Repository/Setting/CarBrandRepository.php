<?php

namespace App\Repository\Setting;


use App\Models\Car;
use App\Models\CarBrand;

class CarBrandRepository extends BaseRepository implements CarBrandInterface, BaseInterface
{

    protected $carBrand;

    public function __construct(CarBrand $carBrand)
    {
        parent::__construct($carBrand);
        $this->carBrand = $carBrand;
    }

    public function fetchCarTypeWiseCarBrand($id)
    {
        return $this->carBrand
            ->leftJoin('car_types', 'car_brands.car_type_id', '=', 'car_types.id')
            ->where('car_brands.status', '=', 'Active')
            ->where('car_types.status', '=', 'Active')
            ->where('car_brands.car_type_id', $id)
            ->select('car_brands.*')
            ->orderBy('car_brands.name', 'ASC')
            ->get();
    }

}
