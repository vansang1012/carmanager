<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\RepositoryInterface;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }


    abstract public function getModel();


    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }


    public function getAll()
    {
        return $this->model->all();
    }


    public function store($obj)
    {
        $obj->save();
    }

    public function edit($obj)
    {
        $obj->save();
    }
    public function delete($obj)
    {
        $obj->delete();
    }

}
