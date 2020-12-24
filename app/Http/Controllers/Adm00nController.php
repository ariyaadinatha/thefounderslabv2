<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adm00nController extends Controller
{
    public function index()
    {
        return view("adm00n.adm00nIndex");
    }

}
