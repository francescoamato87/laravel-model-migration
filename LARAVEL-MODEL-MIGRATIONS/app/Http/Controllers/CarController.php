<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
   public function store(){
       $car = new Car();

       $car->marca = 'Lamborghini';
       $car->modello = 'Sesto Elemento';
       $car->targa = 'AS3435E';
    //    $car->img = 'https://italyluxuryblog.com/wp-content/uploads/2020/04/sesto-elemento.jpg';

       $car->save();

       echo 'Car created!';
    }
}
