<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery_categories;
use DataTables;

class GaleriCategoryController extends Controller
{
    public function index()
    {
        return view('admin.galery_kategori.index');
    }

    public function getData(Request $request)
    {
        // dd(Artikel::select('*')->orderBy('created_at')->get());
        if ($request->ajax()) {
            $kategori = Galery_categories::select('*')->orderBy('created_at');
            return Datatables::of($kategori)
                ->addIndexColumn()
                ->addColumn('created_at', function ($kategori) {

                    return date('d-m-Y', strtotime($kategori->created_at));
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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
