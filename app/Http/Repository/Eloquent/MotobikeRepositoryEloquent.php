<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\MotobikeRepositoryInterface;
use App\Motobike;

class MotobikeRepositoryEloquent extends RepositoryEloquent implements MotobikeRepositoryInterface
{

    public function getModel()
    {
        return Motobike::class;
    }

    public function findById($id)
    {
        return Motobike::findorfail($id);
    }

    public function update($obj)
    {
        $obj->save();
    }
}
