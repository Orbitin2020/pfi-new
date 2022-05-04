<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use DataTables;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $role = Roles::get();
        // debugbar()->info($role);
        return view('admin.user.index', compact('role'));
    }

    public function getData()
    {
        $query = User::with('roles')->get();
        // debugbar()->info($query);
        // $query = User::get();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('Actions', function($query) {
                $html = '<button href="javascript:void(0)" data-id="' . $query->id . '" id="editAccount" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button> <button href="javascript:void(0)" data-id="' . $query->id . '" id="deleteAccount" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $html;
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function getUser()
    {
        $user = User::with('roles')->get();
        return response([
            'success'   => true,
            'message'   => 'List User',
            'data'      => $user
        ],200);
    }

    public function getRole()
    {
        $role = Role::get();
        return response([
            'success'   => true,
            'message'   => 'List Role',
            'data'      => $role
        ],200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required', 
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Email Sudah terdaftar',
            ]);
        }

        $user = new User();

        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password1']);
        $user->assignRole($data['role']);
        $user->save();

        if($user){
            return response()->json([
                'status' => 200,
                'message'   => 'User Berhasil Di Simpan',
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'message'   => 'User Gagal Di Simpan',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required', 
            'username' => 'required',
            'email' => 'required|unique:users',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Email Sudah terdaftar',
            ]);
        }

        $user = User::where('id', $id)->first();
        
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->assignRole($data['role']);
        $user->update();

        if($user){
            return response()->json([
                'status' => 200,
                'message'   => 'User Berhasil Di Simpan',
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'message'   => 'User Gagal Di Simpan',
            ]);
        }
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        if($user) {
            return response()->json([
                'message'   => 'Edit User',
                'data'      => $user
            ],200);
        } else {
            return response()->json([
                'message'   => 'Edit Gagal'
            ]);
        }
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        if($user){
            return response()->json([
                'status' => 200,
                'message'   => 'User Berhasil Di Hapus',
            ]);
        }else{
            return response()->json([
                'status' => 500,
                'message'   => 'User Gagal Di Hapus',
            ]);
        }
    }
}
