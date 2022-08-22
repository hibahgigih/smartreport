<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class UserController extends Controller
{
    public function index (Request $request)
    {
        if ($request->ajax()) {
  
            $data = User::latest()->get();
  
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('opsi', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['opsi'])
                    ->make(true);
        }
        return view('users');
    }

    public function store(Request $request)
    {
        $id = $request->id;

        DB::unprepared('SET IDENTITY_INSERT users ON');
        User::updateOrCreate([
                    'id' => $id
                ],
                [
                    'name' => $request->name, 
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => $request->role
                ]);  
        DB::unprepared('SET IDENTITY_INSERT users OFF'); 
     
        return response()->json(['success'=>'Data user berhasil disimpan.']);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
      
        return response()->json(['success'=>'Data user berhasil dihapus.']);
    }

}
