<?php

namespace App\Repository\Setting;



use App\Models\Area;
use App\Repository\Base\BaseInterface;
use App\Repository\Base\BaseRepository;
use Faker\Provider\Base;


class AreaRepository extends BaseRepository implements AreaInterface
{

    protected $model;

    public function __construct(Area $model)
    {
        parent::__construct($model);
    }

    public function getCityWiseArea($id){
        return $this->model->where('location_id', $id)->get();
    }

}
