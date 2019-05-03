<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employer;
use App\product;
class pagecontroller extends Controller
{
    public function home()
    {
    	return view('welcome');
    }
public function about()
    {
    	return view('about');
    }

public function info()
    { 
    $p=["John Frieda","Hairspray","price is $7.0"];
    return view('Product',["p1"=>$p]);
    }

public function u1()
    {
    return response()->json([
    'name' => 'Abigail',
    'state' => 'CA'
]);
}
public function index()
{
echo("Age limit Exceeded");
}

public function register()
{
return view('registeration');
}
public function form()
{
    $emp=new employer();
    $emp->name=request('name');
    $emp->email=request('email');
    $emp->salary=request('salary');
    $emp->designation=request('designation');
    $emp->save();
}
public function add()
{
    return view('productadd');
}

public function entry()
{
    $p=new product();
    $p->name=request('name');
    $p->description=request('description');
    $p->price=request('price');
    $p->brand=request('brand');
    $p->homedelivery=request('optradio');
    $p->save();
}


}








