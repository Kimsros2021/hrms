<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function index(){
        try {
            $menu=DB::table('module')->where([
                ['status','=','t'],
                ['parent_id','=',null]
            ])->get();
            return view('dashboard')->with(['menu'=>$menu]);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
