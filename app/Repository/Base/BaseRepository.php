<?php

namespace App\Repository\Base;
use App\Models;
use App\Repository\Base\BaseInterface;
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

       return $this->model->where('status','Active')->get();

    }

    public function hello(array $data)
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

    public function delete($id)
    {
        return  $this->model->where('id',$id)->update([
            'status'=>'Inactive'
        ]);
    }
}