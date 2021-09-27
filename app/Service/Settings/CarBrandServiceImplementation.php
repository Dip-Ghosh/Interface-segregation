<?php
namespace App\Service\Settings;
use App\Repository\Setting\CarBrandInterface;


class CarBrandServiceImplementation implements CarBrandService{

    private $carbrand;

    public function __construct(CarBrandInterface $carbrand)
    {
        $this->carbrand = $carbrand;
    }

    public function all()
    {
        $status = 'Active';
        $orderBy = 'ASC';
        return $this->carbrand->fetchActiveBrand($status,$orderBy);

    }

    public function store(array $data)
    {
        return $this->carbrand->store($data);
    }

    public function delete($id)
    {
        $status = 'Inactive';
        return $this->carbrand->delete($id,$status);
    }

    public function edit($id)
    {
        return $this->carbrand->edit($id);
    }

    public function update(array $data, $id)
    {
        return $this->carbrand->update($data,$id);
    }

    public function fetchCarTypeWiseCarBrand($id)
    {
        return $this->carbrand->fetchCarTypeWiseCarBrand($id);
    }

}