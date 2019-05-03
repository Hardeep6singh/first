<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/productcontrol','pagecontroller@entry');

Route::get('/AddProduct','pagecontroller@add');
Route::get('/registeration','pagecontroller@register');
Route::get('/About','pagecontroller@about');
Route::get('/','pagecontroller@home');
Route::get('/ProductInfo','pagecontroller@info');
Route::get('/home','pagecontroller@home');
Route::get('/user','user@user');
Route::get('/u','pagecontroller@u1');
Route::get('age','pagecontroller@index')->middleware('age:52');
Route::post('/employee','pagecontroller@form');
Route::get('/user/{name}', function ($na) {
if($na<=50){
	return 'grade is equal to:-C';
  }
   elseif($na<=70)
   {
   	return 'grade is equal to:-B';
   }
else
{
	return 'grade is equal to:-A';
}
});
Route::get('user/{name}', function ($name) {
    return 'hello'.$name;
})->where('name','[A-Z]+');




Route::get('/neha', function () {
    return response('Hi this is header tutorial', 200)
                  ->header('Content-Type', 'text/css')
                  ->header('X-Header-One','neha')
                  ->cookie('harry','10',70);
});
Route::get('/hardeep',function(){
return response('hi is this what you want')
            ->withHeaders([
                'Content-Type' => 'text/css',
                'X-Header-One' => 'Header Value',
                'X-Header-Two' => 'Header Value',
            ]);});


Route::get('search',function(){
  return redirect('https://www.google.com');
});



