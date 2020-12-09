<?php

namespace App\Http\Controllers\Form;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


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
        //if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email; //filter var não está funcionando
        //}else{
        //    echo("$request->email não é valido");
        //}
        $user->password = hash::make($request->password);
        $user->save(); //preciso desse save para persistir as informaçoes no banco
        return redirect()->route('users.listAll');  //retorna na pagina de home
        //dd($request);
    }

    public function formEditUser(User $user){
        return view('editUser', [               //ivokei os dados do meu banco para que possa
            'user' => $user                     //mostra-los na minha visão, agora só invoca-los 
        ]);                                     //através do value=""
    }

    public function edit(User $user, Request $request){ //vem os dados do formulario editUser
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
              $user->email = $request->email;
         }                                         //recebo os dados via request e passo e pra 
                                                    // dentro do user pra persistir no banco
        if(!empty($request->password)){
            $user->password = hash::make($request->password);
        }
        $user->save();
        return redirect()->route('users.listAll');     //redireciona para a tela de usuarios
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.listAll');
        echo "<script> alert('nças'); </script>";
    }
}
