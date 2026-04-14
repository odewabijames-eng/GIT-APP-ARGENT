<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
       public function showlogin()
   {
       return view('auth.login');
   }
   public function login()
   {

   }


   public function showregister()
   {
       return view('auth.register');
   }
   public function register()
   {
        //
   }

    public function logout()
    {
         //
    }
}
