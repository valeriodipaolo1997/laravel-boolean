<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Cocktail::paginate(8);
        //dd($drinks);
        return response()->json([
            'success' => true,
            'results' => $drinks
        ]);
    }

    public function show($id)
    {
        $drink = Cocktail::all()->where('id', $id)->first();
        if ($drink) {
            return response()->json([
                'success' => true,
                'result' => $drink
            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => 'Ops! Page not found'
            ]);
        }
    }
}
