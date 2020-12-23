<?php

namespace App\Http\Controllers;

use App\menuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $menu=menuModel::menu(4);
            $position=DB::table('position')->where('status','=','t')->orderBy('name')->get();
            return view('position.position')->with(['menu'=>$menu,'position'=>$position]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $menu=menuModel::menu(4);
            $department=DB::table('department')->where('status','=','t')->orderBy('name')->get();
            return view('position.add_position')->with(['menu'=>$menu,'department'=>$department]);
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
        $validation = \Validator::make($request->all(), [
            'position' => ['required'],
            'position_kh' => 'required',
            'department_id'=>['required','integer'],
            'status'=>'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        DB::beginTransaction();
        try {
            DB::table('position')->insert([
                'name'=>$request->position,
                'name_kh'=>$request->position_kh,
                'department_id'=>$request->department_id,
                'status'=>$request->status,
                'create_date' => date('Y/m/d h:m:s'),
                'create_by' => 1
            ]);
            DB::commit();
            return redirect('position')->with(['success'=>'Success Inserted !!']);
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
        try {
            $menu=menuModel::menu(4);
            $department=DB::table('department')->where('status','=','t')->orderBy('name')->get();
            $position=DB::table('position')->where('id','=',$id)->get();
            return view('position.edit_position')->with(['menu'=>$menu,'department'=>$department,'position'=>$position]);
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
        $validation = \Validator::make($request->all(), [
            'position' => ['required'],
            'position_kh' => 'required',
            'department_id' => ['required', 'integer'],
            'status' => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        DB::beginTransaction();
        try {
            DB::table('position')->where('id','=',$id)->update([
                'name' => $request->position,
                'name_kh' => $request->position_kh,
                'department_id' => $request->department_id,
                'status' => $request->status,
                'create_date'=>date('Y/m/d h:m:s'),
                'create_by'=>1
            ]);
            DB::commit();
            return redirect('position')->with(['success' => 'Success Inserted !!']);
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
        DB::beginTransaction();
        try {
            DB::table('position')->delete($id);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
