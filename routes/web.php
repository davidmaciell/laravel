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

//Route::get('/', 'usuarioControl@listUser');
                                                        //não entendi esse name  ??nome da rota??
Route::get('usuarios','Form\\TestController@listAllUsers')->name('users.listAll'); //lista de todos usuarios

Route::get('usuarios/novo','Form\\TestController@formularioAddUser')->name('form.addUser'); //fotmulario para cadastrar novo usuario



//quando chamar usuarios na url ,vai no controller TestController no metodo listAllUsers.
//Route::get('usuarios/{user}','Form\\TestController@listUser')->name('list');  //passo o o id do usuario e ele busca apenas aquele que chamei


Route::post('usuarios/store', 'Form\\TestController@storeUser')->name('users.store'); 
        //esse como edit para evitar que o usuario chame essa rota pelo uri pois isso iria gerar um erro
Route::put('usuarios/edit/{user}', 'Form\\TestController@edit')->name('users.edit');
Route::get('usuarios/editar/{user}','Form\\TestController@formEditUser')->name('form.addUser');
//esse é get pois ele me traz o formulario. já o edit é put pois ele leva as informaçoes e atualiza no banco



