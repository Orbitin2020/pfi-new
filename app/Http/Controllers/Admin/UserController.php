<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
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
        $user = new User();

        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->assignRole($request->get('role'));
        $user->save();

        if($user){
            return response()->json([
                'success'   => true,
                'message'   => 'User Berhasil Di Simpan',

            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'User Gagal Di Simpan',
            ]);
        }
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        if($user)
        {
            return response()->json([
                'success'   => true,
                'message'   => 'Edit User',
                'data'      => $user
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Edit Gagal'
            ]);
        }
    }

    public function update(Request $request,$id)
    {
        $user =  User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->assignRole($request->get('role'));
        $user->update();

        if($user){
            return response()->json([
                'success' => true,
                'message' => 'User Berhasil Di Update',
                'data'    => $user
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'User Gagal Di Update'
            ], 400);
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        if($user){
            return response()->json([
                'success' => true,
                'message' => 'User Berhasil Di Hapus',
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'User Gagal Di Hapus'
            ], 400);
        }
    }
}
