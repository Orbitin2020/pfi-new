<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Galery_categories;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;
use DataTables;

class GaleriController extends Controller
{
    public function index()
    {
        return view('admin.galery.index');
    }

    public function getData(Request $request)
    {
        // dd(Artikel::select('*')->orderBy('created_at')->get());
        if ($request->ajax()) {
            $galeri = Galery::select('*')->orderBy('created_at');
            return Datatables::of($galeri)
                ->addIndexColumn()
                ->addColumn('created_at', function ($galeri) {

                    return date('d-m-Y', strtotime($galeri->created_at));
                })
                ->addColumn('category_id', function ($galeri) {
                    if($galeri->category_id)
                    {
                        return $galeri->category->nama;
                    }
                    
                })
                ->addColumn('gambar', function ($galeri) {
                    $url = asset('image/galeri/'.$galeri->gambar);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                    return $img;
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->rawColumns(['gambar','action'])
                ->make(true);
        }
    }

    public function getKategori()
    {
        $kategori = Galery_categories::orderBy('id')->get();
        return response()->json([
            'message' => 'Data Galery Kategori',
            'data'    => $kategori
        ]);
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
            'category_id' => $request->input('kategori'),
            'admin_id'  => Auth::user()->id
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
        $kategori = Galery_categories::all();
        return response()->json([
            'message' => 'Edit Gallery',
            'data'    => $galeri,
            'kategori'=> $kategori
        ]);

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

                'category_id' => $request->input('kategori')
            ]);
        }else{
            $galeri = Galery::find($id)->update([
                'nama'      => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),

                'category_id' => $request->input('kategori')
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
