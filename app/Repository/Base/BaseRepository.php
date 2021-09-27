<?php

namespace App\Repository\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseInterface
{
    protected $model;

    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {

       return $this->model->all();

    }

    public function store(array $data)
    {

        return $this->model->store($data);
    }

    public function edit($id)
    {
        return $this->model->where('id',$id)->first();
    }

    public function update(array $data, $id)
    {
        return $this->model->where('id',$id)->update($data);
    }

    public function delete($id, $status)
    {
        return  $this->model->where('id',$id)->update([
            'status'=>$status
        ]);
    }
}