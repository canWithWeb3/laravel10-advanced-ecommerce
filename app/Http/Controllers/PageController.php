<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function get_home()
    {
        return view("pages.home");
    }
}
