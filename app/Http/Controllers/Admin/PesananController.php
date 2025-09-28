<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index()
    {
        return view('admin.pesanan.index');
    }
}

