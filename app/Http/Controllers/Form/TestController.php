<?php

namespace App\Http\Controllers\Form;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class TestController extends Controller
{
    public function listAllUsers() {
        $users = User::all();
        return view('listAllUsers', [
          //esse usuarios vou passar pra lá como parametro e ela vai com tudo que 
          //tem dentro do $users ou seja todos usuarios
            'usuarios' => $users
        ]);
    }
    public function listUser(User $user){
        return view('listaUser' ,[
            'user' => $user
        ]); 
    }

    public function formularioAddUser(){
        return view('formulario');
    }

    public function storeUser(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save(); //preciso desse save para persistir as informaçoes no banco
        return redirect()->route('users.listAll');  //retorna na pagina de home
        //dd($request);
    }

    
}
