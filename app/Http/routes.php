<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

###################### EXEMPLOS DE ROTAS ##################################
// Route::get('postagem/adicionar',function(){
// 	return 'Adicionar novas postagens';
// });

// Route::get('postagem/editar/{id_postagem?}',function($id_postagem=''){
// 	return "Editar a postagem {$id_postagem}";
// });

// Route::match(['get','post'],'/hello/{name?}', function($name="World"){
// 	return "Hello {$name}";
// });

// Route::group(array('prefix'=>'painel'),function(){
// 	Route::get('usuarios',function(){
// 		return 'Lista de usuários';
// 	});
// 	Route::get('produtos',function(){
// 		return 'Lista de produtos';
// 	});
// });

 // Route::get('/all_users', function () {
 // return DB::select('SELECT * FROM users WHERE 1=1');
 // });

// Route::get('/all_users', function () {
//  $users = DB::select('SELECT * FROM users WHERE 1=1');
//  return view ('rotas', ['users'=>$users]);
//  });
Route::get('/all_users', ['uses'=>'UsersController@allUsers', 'as'=>'users.all_users']);
// $users = \DB::select('SELECT * FROM users WHERE id=?', [1]);

Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');
Route::resource('categories','CategoriesController');

Route::get('/', function () {
    return view('welcome');
});
