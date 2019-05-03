<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function user(){

    return view('welcome',[
            'id'=>101,
            'name'=>request('title')]);
}
}
