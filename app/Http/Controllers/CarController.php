<?php

namespace App\Http\Controllers;


use App\Car;
use App\Http\Service\Impl\CarService;
use App\Http\Service\Impl\Service;
use Illuminate\Http\Request;


class CarController extends Controller
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function create()
    {
        return view('car.create');
    }

    public function index()
    {
        $cars = $this->carService->getAll();
        return view('car.list', compact('cars'));
    }

    public function store(Request $request)
    {
        $this->carService->store($request);
        return redirect()->route('car.index');

    }

    public function update($id)
    {
        $car = $this->carService->findById($id);
        return view('car.update', compact('car'));
    }

    public function edit(Request $request)
    {
        $this->carService->edit($request);
        return redirect()->route('car.index');
    }

    public function delete($id)
    {
        $this->carService->delete($id);
        return redirect()->route('car.index');
    }
}
