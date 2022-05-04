<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientCategory;
use Illuminate\Support\Str;
use Auth;
use DataTables;
use Validator;

class ClientController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $client = Client::get();
        $client_category = ClientCategory::get();
        return view('admin.client.index', compact('client_category', 'client'));
    }

    public function getData()
    {
        $query = Client::with('categoryClient')->get();
        $clientCategory = ClientCategory::get();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('Actions', function($query) {
                $html = '<button href="javascript:void(0)" data-id="' . $query->id . '" id="editClient" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button> <button href="javascript:void(0)" data-id="' . $query->id . '" id="deleteClient" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $html;
            })
            ->addColumn('nm_category', function($query) {
                return $query->categoryClient->nm_category;
            })
            ->addColumn('created_at', function($query) {
                return date('Y-m-d H:i:s', strtotime($query->created_at));
            })
            ->addColumn('gambar', function($query) {
                $url = asset('image/client/' . $query->gambar);
                $img = '';
                $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                return $img;
            })
            ->rawColumns(['Actions', 'gambar'])
            ->make(true);
    }

    public function store(Request $request)
    {

        $message = [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.unique' => 'Nama sudah terdaftar',
            'link.required' => 'Link tidak boleh kosong',
            'link.unique' => 'Link sudah terdaftar',
            'category_id.required' => 'Categori tidak boleh kosong'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:clients,nama',
            'link' => 'required|unique:clients,link',
            'deskripsi' => 'required',
            'category_id' => 'required'
        ], $message);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors()->all()
            ]);
        } else {
            $random = Str::random(10);
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $name = $random.'.'.$extension;
            $path = public_path().'/image/client';
            $upload = $gambar->move($path,$name);
    
            Client::create([
                'category_id' => $request->category_id,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'gambar' => $name
            ]);
    
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil menambahkan Data Client'
            ], 200);
        }

    }

    public function edit($id)
    {
        $data = Client::where('id', $id)->first();
        return $data;
    }

    public function update(Request $request, $id)
    {
        $message = [
            'editNama.required' => 'Nama tidak boleh kosong',
            'editLink.required' => 'Link tidak boleh kosong',
            'editCategory_id.required' => 'Categori tidak boleh kosong',
            'editDeskripsi.required' => 'Deskripsi tidak boleh kosong'
        ];

        $validator = Validator::make($request->all(), [
            'editNama' => 'required',
            'editLink' => 'required',
            'editDeskripsi' => 'required',
            'editCategory_id' => 'required'
        ], $message);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors()->all()
            ]);
        } else {

            if($request->hasFile('editGambar')) {
                $random = Str::random(10);
                $gambar = $request->file('editGambar');
                $extension = $gambar->getClientOriginalExtension();
                $name = $random.'.'.$extension;
                $path = public_path().'/image/client';
                $upload = $gambar->move($path,$name);

                $data = Client::where('id', $id)->first();
                $data->nama         = $request->editNama;
                $data->link         = $request->editLink;
                $data->deskripsi    = $request->editDeskripsi;
                $data->category_id  = $request->editCategory_id;
                $data->gambar       = $name;
                $data->save();
                
            } else {
                $data = Client::where('id', $id)->first();
                $data->nama         = $request->editNama;
                $data->link         = $request->editLink;
                $data->deskripsi    = $request->editDeskripsi;
                $data->category_id  = $request->editCategory_id;
                $data->save();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Berhasil mengupdate Data Client'
            ]);

        }
    }

    public function delete($id)
    {
        $data = Client::where('id', $id)->first();
        $data->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data'
        ]);
    }
}
