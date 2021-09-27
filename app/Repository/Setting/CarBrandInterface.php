<?php
namespace App\Repository\Setting;

interface CarBrandInterface{

    public function fetchActiveBrand($status,$orderBy);

    public function store(array $data);

    public function delete($id,$status);

    public function edit($id);

    public function update(array $data, $id);

    public function fetchCarTypeWiseCarBrand($id);


}
