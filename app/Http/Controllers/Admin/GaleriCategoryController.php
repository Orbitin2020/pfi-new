<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Galery_categories;

class GaleriCategoryController extends Controller
{
    public function index()
    {
        return view('admin.galeri_category.index');
    }

    public function getData()
    {
        $categori = Galery_categories::orderBy('created_at','desc')->get();
        return response([
            'success'   => true,
            'message'   => 'List Galery Categories',
            'data'      => $categori
        ],200);

    }

    public function store(Request $request)
    {
        $categori = Galery_categories::create([
            'nama'  => $request->input('nama')
        ]);

        if($categori){
            return response()->json([
                'success'   => true,
                'message'   => 'Categori Berhasil Di Simpan',

            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Categori Gagal Di Simpan',
            ]);
        }
    }
    
    public function edit($id)
    {
        $categori = Galery_categories::where('id',$id)->first();
        if($categori)
        {
            return response()->json([
                'success'   => true,
                'message'   => 'Edit Category',
                'data'      => $categori
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
        $categori = Galery_categories::find($id)->update([
            'nama'  => $request->input('nama')
        ]);
        if($categori){
            return response()->json([
                'success' => true,
                'message' => 'Category Berhasil Di Update',
                'data'    => $categori
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Category Gagal Di Update'
            ], 400);
        }
    }

    public function delete($id)
    {
        $categori = Galery_categories::find($id);
        $categori->delete();

        if($categori){
            return response()->json([
                'success' => true,
                'message' => 'Category Berhasil Di Hapus',
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Category Gagal Di Hapus'
            ], 400);
        }
    }
}
