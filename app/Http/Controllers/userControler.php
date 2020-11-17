<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Iluminate\Support\Facades\Hash;

class userControler extends Controller
{
    public function listUser()
    {
       // $user = new User();
       // $user->name = 'Daniel Maciel';
      //  $user->email = 'daniel@gmail';
       // $user->password = ('321');
      //  $user->save();

        return view('listaUser');
    }
}
