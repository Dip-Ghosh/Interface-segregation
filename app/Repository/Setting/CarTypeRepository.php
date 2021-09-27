<?php

namespace App\Repository\Setting;
use App\Models\CarType;


class CarTypeRepository implements CarTypeInterface
{

    protected $carType;

    public function __construct(CarType $carType)
    {
        $this->carType = $carType;
    }
    public function fetchActiveCarType($status,$orderBy){

      return $this->carType->where('status', '=',$status)
          ->orderBy('name', $orderBy)
          ->get();
    }

    public function store(array $data){
        $value = [
           'name'=>$data['name'],
           'status'=>$data['status']
        ];
        $this->carType->create($value);
    }

    public function delete($id,$status){
        $this->carType->where('id', $id)->update([
            'status'=>$status
        ]);
    }

    public function edit($id){
        return $this->carType->where('id', $id)->first();
    }

    public function update(array $data, $id){
        $value = [
            'name'=>$data['name'],
            'status'=>$data['status']
        ];
        $this->carType->where('id', $id)->update($value);
    }

}
