<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class RegistroController extends Controller
{
    public function register(){
      $user = User::where('email', '=', Input::get('email'))->first();
      if ($user === null) {
        DB::table('users')->insert(
           ['email' => Input::get('email'),
            'name' =>Input::get('name'),
            'remember_token'=> 'algo',
            'password' =>bcrypt(Input::get('password'))
            ]
        );
      }
      else {

      }
    }
}
