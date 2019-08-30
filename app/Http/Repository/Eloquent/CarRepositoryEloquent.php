<?php


namespace App\Http\Repository\Eloquent;


use App\Car;
use App\Http\Repository\Contracts\CarRepositoryInterface;
use App\Http\Repository\Contracts\RepositoryInterface;

class CarRepositoryEloquent extends RepositoryEloquent implements CarRepositoryInterface
{

    public function getModel()
    {
        return Car::class;
    }
}
