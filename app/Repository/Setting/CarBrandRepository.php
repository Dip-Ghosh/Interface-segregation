<?php

namespace App\Repository\Setting;


use App\Models\Car;
use App\Models\CarBrand;

class CarBrandRepository implements CarBrandInterface
{

    protected $carBrand;

    public function __construct(CarBrand $carBrand)
    {
        $this->carBrand = $carBrand;
    }

    public function fetchActiveBrand($status,$orderBy){
        
      return  $this->carBrand->with(['cartype'])
                ->where('status','=',$status)
                ->orderBy('name', $orderBy)
                ->get();
    }

    public function store(array $data){
        $value = [
           'car_type_id'=>$data['car_type_id'],
           'name'=>$data['name'],
           'status'=>$data['status']
        ];
       return $this->carBrand->create($value);
    }

    public function delete($id,$status){
       return  $this->carBrand->where('id', $id)->update([
            'status'=>$status
        ]);
    }

    public function edit($id){
        return  $this->carBrand->where('id', $id)->first();
    }

    public function update(array $data, $id){
        $value = [
            'car_type_id'=>$data['car_type_id'],
            'name'=>$data['name'],
            'status'=>$data['status']
        ];
       return $this->carBrand->where('id', $id)->update($value);
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
