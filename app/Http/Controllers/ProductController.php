<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    $user = auth()->user();

    $products = Product::all();

    return response()->json([
        'user_name' => $user->name,
        'products' => $products]);
    }
}
