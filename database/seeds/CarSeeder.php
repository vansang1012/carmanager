<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car=new Car();
        $car->name='Ferari';
        $car->price=500;
        $car->save();

        $car=new Car();
        $car->name='BMW';
        $car->price=1000;
        $car->save();

        $car=new Car();
        $car->name='Lobring';
        $car->price=700;
        $car->save();

        $car=new Car();
        $car->name='BMW';
        $car->price=1000;
        $car->save();
    }
}
