<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drink;
use App\Services\DrinkService;
use App\traits\ResponseHandler;

class DrinkController extends Controller
{
    use ResponseHandler;
    public function __construct( protected DrinkService $drinkservice){}
    public function getDrinks() {
        $drinks = Drink::all();
        return $drinks;
    }
}
