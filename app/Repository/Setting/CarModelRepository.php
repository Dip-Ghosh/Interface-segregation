<?php

namespace App\Repository\Setting;


use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;

class CarModelRepository implements CarModelInterface
{

    private $carModel;

    public function __construct(CarModel $carModel)
    {
        $this->carModel = $carModel;
    }

    public function fetchActiveModel($status,$orderBy){

      return $this->carModel->where('status', '=',$status)
                ->orderBy('name', $orderBy)
                ->get();
    }

    public function store(array $data){

        $value = [
           'name'=>$data['name'],
           'status'=>$data['status']
        ];
       return   $this->carModel->create($value);
    }

    public function delete($id,$status){

        return   $this->carModel->where('id', $id)->update([
            'status'=>$status
        ]);
    }

    public function edit($id){

        return  $this->carModel->where('id', $id)->first();
    }

    public function update(array $data, $id){
        
        $value = [
            'name'=>$data['name'],
            'status'=>$data['status']
        ];
        return    $this->carModel->where('id', $id)->update($value);
    }

}
