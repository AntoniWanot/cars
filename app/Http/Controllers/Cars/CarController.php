<?php

namespace app\Http\Controllers\Cars;

use app\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($id){
        $cars = [['audi', 'RS7', 'czerwone'], ['opel', 'crosa', 'zielona'], ['BMW', 'i3', 'dresowe'], ['fiat', 'Punto', 'biały'], ['mercedes', 'gle', 'duży']];
        $car = $cars[$id - 1];
        return view('Cars.show', ['car' => $car]);
    }
}