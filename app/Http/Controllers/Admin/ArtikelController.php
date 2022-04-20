<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Str;
use DataTables;
use Auth;
use File;
use Image;


class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.artikel.index');
    }

    public function index_blog()
    {
        return view('admin.blog.index');
    }

    public function getData(Request $request)
    {
        // dd(Artikel::select('*')->orderBy('created_at')->get());
        if ($request->ajax()) {
            $artikel = Artikel::select('*')->orderBy('created_at');
            return Datatables::of($artikel)
                ->addIndexColumn()
                ->addColumn('created_at', function ($artikel) {

                    return date('d-m-Y', strtotime($artikel->created_at));
                })
                ->addColumn('gambar', function ($artikel) {
                    $url = asset('image/artikel/'.$artikel->gambar);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                    return $img;
                })
                ->editColumn('detail', function ($artikel) {
                    return Str::limit($artikel->detail, 200);
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

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $extension = $gambar->getClientOriginalExtension();
        $name = $request->input('judul').'.'.$extension;
        $path = public_path().'/image/artikel';
        $upload = $gambar->move($path,$name);
        
        
        $artikel = Artikel::create([
            'judul'     => $request->input('judul'),
            'slug'      => Str::slug($request->input('judul'), '-'),
            'detail'    => $request->input('detail'),
            'gambar'    => $name,
            'kategori'  => $request->input('kategori'),
            'admin_id'  => $request->input('admin_id'),

        ]);
        return response()->json([
            'message' => 'Artikel Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $artikel = Artikel::where('id',$id)->first();
        if($artikel)
        {
            return response()->json([
                'success' => true,
                'message' => 'Edit Artikel',
                'data'    => $artikel,
                // 'user'    => $admin_id
            ],200);
        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Edit gagal'
            ], 400);
        }
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug',$slug)->first();
        if($artikel)
        {
            return response()->json([
                'success' => true,
                'message' => 'Detail Artikel',
                'data'    => $artikel,
                // 'user'    => $admin_id
            ],200);
        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Edit gagal'
            ], 400);
        }
    }

    public function update(Request $request,$id)
    {
        if($request->hasfile('gambar')){   
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $name = $request->input('nama').'.'.$extension;
            $path = public_path().'/image/artikel';
            $upload = $gambar->move($path,$name);
            
            // $img = Image::make($gambar->path());

            // $img->resize(683, 468, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($path.'/'.$name);

            $artikel = Artikel::find($id)->update([
                'judul'     => $request->input('judul'),
                'slug'      => Str::slug($request->input('judul'), '-'),
                'deskripsi' => $request->input('deskripsi'),
                'detail'    => $request->input('detail'),
                'gambar'    => $name,
                'kategori'  => $request->input('kategori'),
                'admin_id'  => $request->input('admin_id'),
    
            ]);
        }else{
            $artikel = Artikel::find($id)->update([
                'judul'     => $request->input('judul'),
                'slug'      => Str::slug($request->input('judul'), '-'),
                'deskripsi' => $request->input('deskripsi'),
                'detail'    => $request->input('detail'),
                'kategori'  => $request->input('kategori'),
                'admin_id'  => $request->input('admin_id'),
    
            ]);
        }

        if($artikel){
            return response()->json([
                'success' => true,
                'message' => 'Artikel Berhasil Di Update',
            ],200);

        }else{
            return response()->json([
                'succes' => false,
                'message' => 'Artikel Gagal Di Update'
            ], 400);
        }
    }

    public function delete(Request $request,$id)
    {
        $artikel = Artikel::findOrFail($id);
        $path = public_path("\image\artikel\\") .$artikel->gambar;
        
        if(File::exists($path)) {
            File::delete($path);
            $artikel->delete();
        }else{
            $artikel->delete();
            if($artikel)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Artikel Berhasil Di Hapus',
                ]);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Artikel Gagal Di Hapus'
                ]);
            }
        }
       
    }
}
