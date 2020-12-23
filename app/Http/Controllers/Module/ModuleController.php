<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\menuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\TryCatch;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu=menuModel::menu(4);
        $module=DB::table('module')->get();
        return view('module.module')->with(['module'=>$module,'menu'=>$menu]);
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
            $parent=DB::table('module')->where([
                ['status','=','t'],
                ['parent_id','=',null]
            ])->get();
            $menu=menuModel::menu(4);
            return view('module.add_module')->with(['parent'=>$parent,'menu'=>$menu]);
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
        DB::beginTransaction();
        try {
            $validation=\Validator::make($request->all(),[
                'name'=>['required'],
                'status'=>'required',
            ]);
            if($validation->fails()){
                return response()->json(['error'=>$validation->getMessageBag()->toArray()]);
            }
            DB::table('module')->insert([
                'name'=>$request->name,
                'icon'=>$request->icon,
                'parent_id'=>$request->parent,
                'status'=>$request->status,
                'route'=>$request->route,
                'create_at'=>date('Y/m/d h:m:s'),
                'create_by'=>1
            ]);
            DB::commit();
            return redirect('module')->with('success','Success Insert !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        print_r($request->all());
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
        echo 'show';

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
            $parent = DB::table('module')->where([
                ['status', '=', 't'],
                ['parent_id', '=', null]
            ])->get();
            $module=DB::table('module')->where('id','=',$id)->get();
            $menu=menuModel::menu(4);
            return view('module.edit_module')->with(['module'=>$module,'parent'=>$parent,'menu'=>$menu]);
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
        //
        DB::beginTransaction();
        try {
            DB::table('module')->where('id','=',$id)->update([
                'name' => $request->name,
                'icon' => $request->icon,
                'parent_id' => $request->parent,
                'status' => $request->status,
                'route'=>$request->route,
                'create_at' => date('Y/m/d h:m:s'),
                'create_by' => 1
            ]);
            DB::commit();
            return redirect('module')->with('success', 'Success Updated !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
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
        DB::beginTransaction();
        try {
            DB::table('module')->delete($id);
            DB::commit();
            return redirect('module')->with('success', 'Success Deleted !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
