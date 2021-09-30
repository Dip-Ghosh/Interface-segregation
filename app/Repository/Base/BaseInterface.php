<?php

namespace App\Repository\Base;

interface BaseInterface
{

    public function index();
    
    public function store(array $data);

    public function edit($id);

    public function update(array $data, $id);

    public function delete($id);
}