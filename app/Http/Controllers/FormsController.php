<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;

class FormsController extends Controller
{
    public function getShipping($size) {
        return Shipping::where('size', $size)->get();
    }
}
