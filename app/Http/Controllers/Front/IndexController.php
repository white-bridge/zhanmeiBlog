<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;

class IndexController extends FrontController
{
    //
    public function index(){

        return view('front.index');
    }
}
