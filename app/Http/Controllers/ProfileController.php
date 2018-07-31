<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\User;
class ProfileController extends Controller
{
  public function index(Request $request){
    $email = $request->session()->get('email');
    $user = User::where('email', $email)->first();
    $view = view('perfil')->with('user',$user);
    return $view;
  }

  public function update(Request $request,$id){
    $user = User::where('id', $id)->first();
    $user->name = $request->input('name');
    $user->lastname = $request->input('lastname');
    if ( !  $request->input('password') == '')
    {
        $user->password = bcrypt( $request->input('password'));
    }
    $user->save();
    return redirect()->back();
  }
}
