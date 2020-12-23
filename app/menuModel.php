<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class menuModel extends Model
{
    public static function menu($role_id){
        try {
            $parent =db::select("SELECT DISTINCT(m.*) FROM module m INNER JOIN role_access ra on m.id=ra.module_id WHERE m.status='t' and m.parent_id is NULL and ra.role_id=$role_id order by m.order");
            $sub_menu = null;
            foreach ($parent as $nu) {
                $sub_menu[$nu->name] = DB::select("SELECT DISTINCT(m.*) FROM module m RIGHT JOIN role_access ra on ra.module_id=m.id WHERE m.status='t' and m.parent_id=$nu->id order by m.order");
            }
            $menu['menu']=$parent;
            $menu['sub_menu']=$sub_menu;
            return $menu;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function role(){
        
    }

    public static function module_id(){
        
    }
}
