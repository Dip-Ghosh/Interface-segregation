<?php
namespace App\Service\Settings;

 interface LocationServiceInterface{

     public function all();

     public function store($data);

     public function edit($id);

     public function update($data, $id);

     public function delete($id);

     public function getLocationWiseArea($id);




 }