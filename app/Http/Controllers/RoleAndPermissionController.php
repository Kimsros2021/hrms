<?php

namespace App\Http\Controllers;

use App\menuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu=menuModel::menu(4);
        $role=DB::table('role')->where('status','=','t')->get();
        $module=DB::table('module')->where('status','=','t')->get();
        return view('setting.role')->with(['menu'=>$menu,'role'=>$role,'module'=>$module]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try {
            $menu=menuModel::menu(4);
            $module=DB::table('module')->where('status','=','t')->orderBy('name')->get();
            return view('setting.add_role_permission')->with(['menu'=>$menu,'module'=>$module]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validation=\Validator::make($request->all(),[
            'role'=>'required',
            'position'=>'required',
            'read'=>'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        //
        DB::beginTransaction();
        try {
            $role_id=DB::table('role')->insertGetId([
                'name'=>$request->role,
                'role'=>$request->position,
                'status'=>'t',
                'create_date'=>date('Y/m/d h:m:s'),
                'create_by'=>1
            ]);
            $reads = $request->read ?? array();
            foreach ($reads as $read) {
                DB::table('role_access')->insert([
                    'role_id'=>$role_id,
                    'module_id'=>$read,
                    'type'=>1,
                    'create_by'=>1,
                    'create_date'=>date('Y/m/d h:m:s'),
                    'status'=>'t'
                ]);
            }
            $writes= $request->write ?? array();
            foreach ($writes as $write) {
                DB::table('role_access')->insert([
                    'role_id' => $role_id,
                    'module_id' => $write,
                    'type' => 2,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            $creates=$request->create ?? array();
            foreach ($creates as $create) {
                DB::table('role_access')->insert([
                    'role_id' => $role_id,
                    'module_id' => $create,
                    'type' => 3,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            $deletes=$request->delete ?? array();
            foreach ($deletes as $delete) {
                DB::table('role_access')->insert([
                    'role_id' => $role_id,
                    'module_id' => $delete,
                    'type' => 4,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            DB::commit();
            return redirect('role')->with('success', 'Success Insert !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            $menu = menuModel::menu(4);
            $role=DB::table('role')->where([
                ['id', '=', $id],
                ['status','=','t']
            ])->get();
            $module_access=DB::select("SELECT m.id,m.name,(SELECT module_id from role_access WHERE module_id=m.id and type=1 and role_id=$id LIMIT 1) as read,(SELECT module_id from role_access WHERE module_id=m.id and type=2 and role_id=$id LIMIT 1) as write,(SELECT module_id from role_access WHERE module_id=m.id and type=3 and role_id=$id LIMIT 1) as create,(SELECT module_id from role_access WHERE module_id=m.id and type=4 and role_id=$id LIMIT 1) as delete FROM module m WHERE status='t'");
            return view('setting.edit_role_permission')->with(['menu' => $menu,'role'=>$role,'module_access'=>$module_access]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validation = \Validator::make($request->all(), [
            'role' => 'required',
            'position' => 'required',
            'read' => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        DB::beginTransaction();
        try {
            DB::table('role_access')->where('role_id',$id)->delete();
            DB::table('role')->where('id','=',$id)->update([
                'name' => $request->role,
                'role' => $request->position,
                'status' => 't',
                'create_date' => date('Y/m/d h:m:s'),
                'create_by' => 1
            ]);
            $reads = $request->read ?? array();
            foreach ($reads as $read) {
                DB::table('role_access')->insert([
                    'role_id' => $id,
                    'module_id' => $read,
                    'type' => 1,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            $writes = $request->write ?? array();
            foreach ($writes as $write) {
                DB::table('role_access')->insert([
                    'role_id' => $id,
                    'module_id' => $write,
                    'type' => 2,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            $creates = $request->create ?? array();
            foreach ($creates as $create) {
                DB::table('role_access')->insert([
                    'role_id' => $id,
                    'module_id' => $create,
                    'type' => 3,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            $deletes = $request->delete ?? array();
            foreach ($deletes as $delete) {
                DB::table('role_access')->insert([
                    'role_id' => $id,
                    'module_id' => $delete,
                    'type' => 4,
                    'create_by' => 1,
                    'create_date' => date('Y/m/d h:m:s'),
                    'status' => 't'
                ]);
            }
            DB::commit();
            return redirect('role')->with('success', 'Success Updated !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        // dd($request->all());
        
        // return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
