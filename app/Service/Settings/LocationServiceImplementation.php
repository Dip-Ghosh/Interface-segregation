<?php
namespace App\Service\Settings;
use App\Repository\Setting\LocationInterface;
class LocationServiceImplementation implements LocationServiceInterface{

    private $location;
    public function __construct(LocationInterface $location)
    {
        $this->location = $location;
    }

    public function all(){
        $status = 'Active';
        $orderBy = 'ASC';
        return  $this->location->fetchActiveLocations($status,$orderBy);
    }

    public function store($data){
       return  $this->location->store($data);
    }

    public function edit($id){
        return  $this->location->edit($id);
    }

    public function update($data, $id){
        return  $this->location->update($data,$id);
    }

    public function delete($id){
        $status = 'Inactive';
        return  $this->location->delete($id,$status);
    }

    public function getLocationWiseArea($id){
        return  $this->location->getLocationWiseArea($id);
    }
}