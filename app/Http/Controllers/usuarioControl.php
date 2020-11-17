<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Hash;

class usuarioControl extends Controller
{
    public function listUser()
    {
        //$user = new User();
        //$user->name = 'Douglas Gomes';
        //$user->email = 'douglas@mail';
        //$user->password = '123';
        //$user->save();

        //echo "<h1>list</h1>";
        $user = User::where('id' , '=', '4') ->first();
        return view('listAllUsers', [
            'userList' => $user
        ]);
    }
}
