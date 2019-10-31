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

/*
|--------------------------------------------------------------------------
| Rota Original
|--------------------------------------------------------------------------
|
| Route::get('/', function () {
|     return view('welcome');
| });
|
*/





Route::get('/', function (){
    return "<center><a href='atividade1'>Atividade 1</a><br><a href='atividade2'>Atividade 2</a><br><a href='atividade3'>Atividade 3</a></center>";
});

Route::prefix('atividade1')->group(function () {
    
    Route::get('/', function () {
        return view('formAtividade1');
    });

    Route::get('controle1', 'Controller@imc');
});

Route::prefix('atividade2')->group(function () {
    
    Route::get('/', function () {
        return '<center><form action="atividade2/controle2" method="get"><label>1º Valor: </label><input type="number" name="numero1"/><br><label>2º Valor: </label><input type="number" name="numero2"/><br><button type="submit">Somar</button></form><button><a href="/">Voltar</a></button></center>';
    });

    Route::get('controle2', 'Controller@numero');
});

Route::prefix('atividade3')->group(function () {
    
    Route::get('/', function () {
        return '<center><form action="atividade3/controle3" method="get"><input type="number" name="valor"/><button type="submit">Potência</button></form><button><a href="/">Voltar</a></button></center>';
    });

    Route::get('controle3', 'Controller@potencia');
});
























// Route::group = usado para criar um grupo de rotas

/*

Route::group(['prefix' => 'exercicio'], function(){

    Route::get('/', function () {
        return '<h1>Caminho 1</h1> <a href="./c2"><button type="" > Próximo</button></a>';
    });
    
    Route::get('/c2', function () {
        return '<h2>Caminho 2</h2> <a href="./"><button type="" >Voltar</button></a>   <a href ="./c3"><button type="" > Próximo</button></a>';
    });
    
    Route::get('/c3', function () {
        return '<h3>Caminho 3</h3> <a href="./"><button> Caminho 1</button></a>    <a href="./c2"><button> Caminho 2</button></a>';
    });

});

*/