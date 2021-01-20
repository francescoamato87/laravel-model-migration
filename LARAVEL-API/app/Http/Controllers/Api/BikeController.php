<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function index() {
        // return 'bikes API result json';

        // Get Bikes from DB......!
        $bikes = Bike::all();
        // dd($bikes);
        return response()->json($bikes); // <---------- creazione interfaccia JSON
    }
}
