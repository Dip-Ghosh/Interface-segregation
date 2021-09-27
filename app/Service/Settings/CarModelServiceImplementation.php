<?php
namespace App\Service\Settings;
use App\Repository\Setting\CarModelInterface;


class CarModelServiceImplementation implements CarModelService{

    private $carModel;

    public function __construct(CarModelInterface $carModel)
    {
        $this->carModel = $carModel;
    }

    public function all()
    {
        $status = 'Active';
        $orderBy = 'ASC';
        return $this->carModel->fetchActiveModel($status,$orderBy);

    }

    public function store(array $data)
    {
        return $this->carModel->store($data);
    }

    public function delete($id)
    {
        $status = 'Inactive';
        return $this->carModel->delete($id,$status);
    }

    public function edit($id)
    {
        return $this->carModel->edit($id);
    }

    public function update(array $data, $id)
    {
        return $this->carModel->update($data,$id);
    }


}