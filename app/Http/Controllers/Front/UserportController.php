<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;

class UserportController extends FrontController
{
    //
    public function index(){

        return view('userport.index');
    }

    public function edit(){

        return view('userport.edit');
    }
}