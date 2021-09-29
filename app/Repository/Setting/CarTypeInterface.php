<?php
namespace App\Repository\Setting;

interface CarTypeInterface{

    public function fetchActiveCarType($status,$orderBy);

}
