<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class HomeController extends Controller
{
    public function index() {
        // get data from DB
        $guests = Guest::all();
        // dd($guests);
        dump($guests);

        return view('home', compact('guests'));
    }
}
