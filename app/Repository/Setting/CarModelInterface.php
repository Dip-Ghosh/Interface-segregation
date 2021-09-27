<?php
namespace App\Repository\Setting;

interface CarModelInterface{

    public function fetchActiveModel($status,$orderBy);

    public function store(array $data);

    public function delete($id,$status);

    public function edit($id);

    public function update(array $data, $id);


}
