<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //

    public function register(Request $request){
        // Validacion de lo que va resivir 
        dd($request->all());
    }
}
