<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class UserKatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        return view('home.katalog', compact('katalogs'));
    }
}
