<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function list()
    {
        $cars = [['audi', 'RS7', 'czerwone'], ['opel', 'crosa', 'zielona'], ['BMW', 'i3', 'dresowe'], ['fiat', 'Punto', 'biały'], ['mercedes', 'gle', 'duży']];
        return view('Cars.list', ['cars'=>$cars]);
    }
}
