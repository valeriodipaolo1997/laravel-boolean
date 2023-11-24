<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drinks = config('drinks');

        foreach ($drinks as $drink) {
            $new_drink = new Cocktail();
            $new_drink->name = $drink['strDrink'];
            $new_drink->category = $drink['strCategory'];
            $new_drink->isAlcoholic = $drink['strAlcoholic'];
            $new_drink->glass = $drink['strGlass'];
            $new_drink->instruction = $drink['strInstructions'];
            $new_drink->thumb = $drink['strDrinkThumb'];
            $new_drink->ingredients = implode(', ', $drink['ingredients']);
            $new_drink->measures = implode(', ', $drink['measures']);
            $new_drink->save();
        }
    }
}
