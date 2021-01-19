<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    //HOMEPAGE
    // **

    public function index() {

        // // GET data from DB *
        $cars = Car::all();
        // dump($cars);
        $cars = Car::where('marca', 'Ford')->get(); // ----------> richiama un dato
        $cars = Car::where('marca', '!=', 'Ford')->get(); // ----------------> richiama tutti tranne quel dato

        $cars = Car::where('marca', '!=', 'Ford')
        ->orderBy('modello', 'desc')
        // ->limit(2)
        ->get();
        // -----------------> Tutte tranne La FORD messe in ordine alfabetico e volendo con il limite di due dati
        // ..........................................................................

        // FIRST
        // $car = Car::where('marca', '!=', 'Ford')
        // ->first();
        // dd($car);

        // FIND
        // $car = Car::where('marca', '!=', 'Ford')
        // ->find(1);
        // dd($car);



        return view('home', compact('cars'));
    }
}
