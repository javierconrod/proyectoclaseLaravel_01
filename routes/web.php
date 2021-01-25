<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (){
    return 'Hola mundo!';
});

Route::get('/', function (){
    return [
        'Clases' => [
            'Instalación Laravel',
            'Routes de Laravel',
            'Views de Laravel',
        ]
    ];
}); 

Route::get('clases', function (){
    return 'Aquí se van a visualizar todas las clases';
});

Route::get('clases/temas', function (){
    return 'Aquí se van a visualizar todas los temas';
});*/

Route::get('/', function (){
    return view('welcome');
});



Route::get('notas', function (){
    return 'Aquí se van a visualizar todas las notas';
});

//crear notas

Route::get('notas/{id_nota}', function($id_nota){
    return 'Esta es la nota '.$id_nota;
});

//detalles nota

Route::get('notas/{id_nota}/detalles', function($id_nota){
    return 'Estos son los detalles de la nota '.$id_nota;
});

//editar nota

Route::get('notas/{id}/editar', function($id){
    return 'Aquí vamos a editar las notas: '.$id;
});
