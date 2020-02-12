<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function get($id) {
        return Product::findOrFail($id);
    }

    public function getByCategory($category) {
        $text;

        if ($category == 1)
            $text = 'Iphone Hard Wood Case';
        else
            $text = 'Macbook Wood Skin';

        return Product::where('category', $text)->get();
    }
}
