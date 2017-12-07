<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AliensController extends Controller
{
    public function index(){
        return view ('Alienspanel/index');
    }
}
