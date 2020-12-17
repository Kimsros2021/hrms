<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    function index(){
        $a='123';
        echo Crypt::en($a);
        echo "<br>";
        echo Crypt::decrypt(Crypt::encrypt($a));
    }
}
