<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($drinks);
        return response()->json([
            'success' => true,
            'results' => $categories
        ]);
    }

    public function show($id)
    {
        $category = Category::with('cocktails')->where('id', $id)->paginate();
        if ($category) {
            return response()->json([
                'success' => true,
                'result' => $category
            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => 'Ops! Page not found'
            ]);
        }
    }
}
