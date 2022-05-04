<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientCategory;
use App\Models\User;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use Auth;
use File;
use Image;

class ClientCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categoryClient.index');
    }

    public function getData()
    {
        $query = ClientCategory::get();
        return DataTables::of($query) 
            ->addIndexColumn()
            ->addColumn('created_at', function($query) {
                return date('Y-m-d', strtotime($query->created_at));
            })
            ->addColumn('Actions', function($query) {
                $html = '<button href="javascript:void(0)" data-id="' . $query->id . '" id="editCategoryClient" type="button" class="btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button> <button href="javascript:void(0)" data-id="' . $query->id . '" id="deleteCategoryClient" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $html;
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        debugbar()->info($data);
        $validator = Validator::make($data, [
            'nm_category' => 'required|unique:client_categories'
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal menambahkan data kategori'
            ]);
        }

        $result = ClientCategory::create([
            'nm_category' => $data['nm_category']
        ]);

        if($result) {
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil menambahkan data Category Client'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Gagal menambahkan data Category Client'
            ]);
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
        $data = ClientCategory::where('id', $id)->first();
        if($data) {
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'data' => $data,
            ]);
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
        $data = $request->all();
        debugbar()->info($data);
        $validator = Validator::make($data, [
            'nm_category' => 'required|unique:client_categories'
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal mengupdate data kategori'
            ]);
        }

        $result = ClientCategory::where('id', $id)->first();
        $result->nm_category    = $data['nm_category'];
        $result->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate data Category Client',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ClientCategory::where('id', $id)->first();
        $data->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data Category Client',
        ]);
    }
}
