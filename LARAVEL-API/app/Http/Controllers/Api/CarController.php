<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index(){
        // return 'cars API result json';

         // Get Cars from DB......!
        $cars = Car::all();
        // dd($cars);
        return response()->json($cars); // <---------- creazione interfaccia JSON
    }
}
