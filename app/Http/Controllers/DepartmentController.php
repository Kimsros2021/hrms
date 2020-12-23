<?php

namespace App\Http\Controllers;

use App\menuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
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
            $department=DB::table('department')->where('status','=','t')->orderBy('name')->get();
            return view('department.department')->with(['menu'=>$menu,'department'=>$department]);
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
        //
        try {
            $menu=menuModel::menu(4);
            return view('department.add_department')->with(['menu'=>$menu]);
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
            'department' => ['required'],
            'status' => 'required',
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        DB::beginTransaction();
        try {
            DB::table('department')->insert([
                'name'=>$request->department,
                'name_kh'=>$request->department_kh,
                'create_by'=>1,
                'create_date'=>date('Y/m/d h:m:s'),
                'status'=>$request->status
            ]);
            DB::commit();
            return redirect('department')->with('success', 'Success Insert !!');
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
            $menu=menuModel::menu(4);
            $department=DB::table('department')
            ->where([
                ['status','=','t'],
                ['id','=',$id]
                ])->orderBy('name')->get();
            return view('department.edit_department')->with(['menu'=>$menu,'department'=>$department]);
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
            'department' => ['required'],
            'status' => 'required',
        ]);
        if ($validation->fails()) {
            return response()->json(['error' => $validation->getMessageBag()->toArray()]);
        }
        DB::beginTransaction();
        try {
            DB::table('department')->where('id','=',$id)->update([
                'name' => trim($request->department),
                'name_kh' =>trim($request->department_kh),
                'create_by' => 1,
                'create_date' => date('Y/m/d h:m:s'),
                'status' => $request->status
            ]);
            DB::commit();
            return redirect('department')->with('success', 'Success Update !!');
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
            DB::table('department')->delete($id);
            DB::commit();
            return redirect('department')->with('success', 'Success Deleted !!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
