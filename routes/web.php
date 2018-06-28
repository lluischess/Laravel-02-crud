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


Route::get('/', function () {
    return view('index');
});

Route::get('llibres', function () {
	$llibres = llibres\Llibre::all();
	return view('llibres.index')->with ('llibres',$llibres);	
});

Route::get('llibres/temas', function () {
	$temas = llibres\Tema::all();
	return view('temas.index')->with ('temas',$temas);	
});

Route::get('llibres/temas/crea', function () {
	return view('temas.add');	
});

Route::get('llibres/crea', function () {
	$temas = llibres\Tema::all()->pluck('nom','nom');
	return view('llibres.add')->with('temas',$temas);	
});

Route::post('llibres', function () {
	$llibre = llibres\Llibre::create(Request::all());
	return redirect('llibres/'.$llibre->id);	
});

Route::post('llibres/temas', function () {
	$tema = llibres\Tema::create(Request::all());
	return redirect('llibres/temas/'.$tema->id);	
});

Route::get('llibres/{id}/delete', function ($id) {
	$llibre = llibres\Llibre::find($id);
	$llibre->delete();
	return redirect('llibres/');	
});

Route::get('llibres/temas/{id}/delete', function ($id) {
	$tema = llibres\Tema::find($id);
	$tema->delete();
	return redirect('llibres/temas');	
});

Route::get('llibres/{id}/edit', function ($id) {
	$llibre = llibres\Llibre::find($id);
	$temas = llibres\Tema::all()->pluck('nom','nom');
	return view('llibres.edit')->with (['llibre'=>$llibre, 'temas'=>$temas]);
});

Route::get('llibres/temas/{id}/edit', function ($id) {
	$tema = llibres\Tema::find($id);
	return view('temas.edit')->with ('tema',$tema);
});

Route::get('llibres/{id}', function ($id) {
	$llibre = llibres\Llibre::find($id);
	return view('llibres.show')->with ('llibre',$llibre);	
});


Route::put('llibres/{id}', function ($id) {
	$llibre = llibres\Llibre::find($id);
	$llibre->update(Request::all());
	return view('llibres.show')->with ('llibre',$llibre);	
});

Route::put('llibres/temas/{id}', function ($id) {
	$tema = llibres\Tema::find($id);
	$tema->update(Request::all());
	return view('temas.show')->with ('tema',$tema);	
});


Route::get('llibres/temas/{id}', function ($id) {
	$tema = llibres\Tema::find($id);
	return view('temas.show')->with ('tema',$tema);	
});

