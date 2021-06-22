<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function admin_index()
    {
        return view('admin.index'); 
    }
}
