<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Galery;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;

class GaleriController extends Controller
{
    public function index()
    {
        return view('admin.galeri.index');
    }

    public function getdata()
    {
        $galeri = Galery::with('category')->orderBy('created_at','desc')->get();
        return response([
            'success'   => true,
            'messsage'  => 'List Image',
            'data'      => $galeri
        ],200);
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $extension = $gambar->getClientOriginalExtension();
        $name = $request->input('nama').'.'.$extension;
        $path = public_path().'/image/galeri';
        $upload = $gambar->move($path,$name);

        $galeri = Galery::create([
            'nama'      => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar'    => $name,
            'admin_id'  => $request->input('admin_id'),
            'category_id' => $request->input('category_id')
        ]);

        if($galeri){
            return response()->json([
                'success'   => true,
                'message'   => 'Gambar Berhasil Di Simpan',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Gambar Gagal Di Simpan'
            ],400);
        }
        
    }

    public function edit($id)
    {
        $galeri = Galery::where('id',$id)->first();
        if($galeri)
        {
            return response()->json([
                'success' => true,
                'message' => 'Edit Gambar',
                'data'    => $galeri,
            ],200);
        }else{
            return response()->json([
                'success' => true,
                'message' => 'Edit gagal',
            ],400);
        }

    }

    public function update(Request $request,$id)
    {   
    
        if (request()->hasFile('gambar') && request('gambar') != '') {
            $gambar = Galery::findOrFail($id);
            $path = public_path("\image\galeri\\") .$gambar->gambar;
            if(File::exists($path)) {
                File::delete($path);
            }
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $name = $request->input('nama').'.'.$extension;
            $path = public_path().'/image/galeri';
            $upload = $gambar->move($path,$name);

            $galeri = Galery::find($id)->update([
                'nama'      => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar'    => $name,
                'admin_id'  => $request->input('admin_id'),
                'category_id' => $request->input('category_id')
            ]);
        }else{
            $galeri = Galery::find($id)->update([
                'nama'      => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'admin_id'  => $request->input('admin_id'),
                'category_id' => $request->input('category_id')
            ]);
        }
        
        if($galeri){
            return response()->json([
                'success' => true,
                'message' => 'Gambar Berhasil Di Update',
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Gambar Gagal Di Update'
            ], 400);
        }

    }

    public function delete($id)
    {
        $gambar = Galery::findOrFail($id);
        $path = public_path("\image\galeri\\") .$gambar->gambar;
        if(File::exists($path)) {
            File::delete($path);
            $gambar->delete();
        }else{
            $gambar->delete();
            if($gambar){
                return response()->json([
                    'success' => true,
                    'message' => 'Gambar Berhasil Di Hapus',
                    
                ]);
            } else{
                return response()->json([
                    'success' => false,
                    'message' => 'Gambar Gagal Di Hapus'
                ]);
            }
        }
           
            
          

    }
}
