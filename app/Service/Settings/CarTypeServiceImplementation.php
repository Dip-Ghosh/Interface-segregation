<?php
namespace App\Service\Settings;
use App\Repository\Setting\CarTypeInterface;

class CarTypeServiceImplementation implements CarTypeService{

    private $carType;

    public function __construct(CarTypeInterface $carType)
    {
        $this->carType = $carType;
    }

    public function all(){
        $status = 'Active';
        $orderBy = 'ASC';
       return $this->carType->fetchActiveCarType($status,$orderBy);
    }

    public function store($data){
        return $this->carType->store($data);
    }

    public function delete($id){
        $status = 'Inactive';
        return $this->carType->delete($id,$status);
    }

    public function edit($id){
        return $this->carType->edit($id);
    }

    public function update($data, $id){
        return $this->carType->update($data,$id);
    }

}