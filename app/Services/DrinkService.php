<?php


namespace App\Sevices;
use App\Models\Drink;


class DrinkService
{
    public function __contsruct() {}
    public function getDrinks(){
        $drinks = Drink::all();
        return $drinks;
    }
 
}