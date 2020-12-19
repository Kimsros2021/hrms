<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class menuModel extends Model
{
    public static function menu(){
        try {
            $parent = DB::table('module')->where([
                ['status', '=', 't'],
                ['parent_id', '=', null]
            ])->get();
            $sub_menu = null;
            $i = 0;
            foreach ($parent as $nu) {
                $sub_menu[$nu->name] = DB::table('module')->where([
                    ['status', '=', 't'],
                    ['parent_id', '=', $nu->id]
                ])->get();
            }
            $menu['menu']=$parent;
            $menu['sub_menu']=$sub_menu;
            return $menu;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
