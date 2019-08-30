<?php


namespace App\Http\Service\Impl;
use App\Car;
use App\Http\Repository\Eloquent\CarRepositoryEloquent;
use App\Http\Service\CarServiceInterface;

class CarService implements CarServiceInterface
{
    protected $carRepository;

    public function __construct(CarRepositoryEloquent $repositoryEloquent)
    {
        $this->carRepository = $repositoryEloquent;
    }

    public function getAll()
    {
        return $this->carRepository->getAll();
    }

    public function store($request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->price = $request->price;
        $this->carRepository->store($car);

    }

    public function findById($id)
    {
        return Car::findorfail($id);
    }

    public function edit($request)
    {
        $id=$request->id;
        $car= $this->findById($id);
        $car->name=$request->name;
        $car->price=$request->price;
        $this->carRepository->edit($car);

    }

    public function delete($id)
    {
        $car=$this->findById($id);
        $this->carRepository->delete($car);
    }
}
