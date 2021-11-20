<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function index($request)
    {
        $name = Route::currentRouteName();
        if ($request->is('admin/*')) {
            dd($name);
        }
    }
}
