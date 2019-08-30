<?php

use App\Motobike;
use Illuminate\Database\Seeder;

class MotobikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motobike=new Motobike();
        $motobike->name="Wave";
        $motobike->price=150;
        $motobike->save();

        $motobike=new Motobike();
        $motobike->name="RSX";
        $motobike->price=100;
        $motobike->save();

        $motobike=new Motobike();
        $motobike->name="SH";
        $motobike->price=200;
        $motobike->save();

        $motobike=new Motobike();
        $motobike->name="Liberty";
        $motobike->price=300;
        $motobike->save();
    }
}
