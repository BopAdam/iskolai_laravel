<?php


namespace App\Services;

use App\Models\Drink;
use App\Http\Resources\DrinkResource;


class DrinkService
{
    public function __construct() {}
    public function getDrinks()
    {
        $drinks = Drink::with("type", "package")->get();
        return DrinkResource::collection($drinks);
    }
    public function getDrink(Drink $drink)
    {
        $oneDrink = $drink->load("type", "package");

        return (new DrinkResource($oneDrink));
    }
}
