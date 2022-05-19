<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Contact;
use Auth;
use Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function store(Request $request) 
    {
        $data = $request->all();

        $message = [
            'nama' => 'Nama tidak boleh kosong !!!',
            'email' => 'Email tidak boleh kosong !!!',
            'telepon' => 'Telepon tidak boleh kosong !!!',
            'subjek' => 'Subjek tidak boleh kosong !!!',
            'pesan' => 'Pesan tidak boleh kosong !!!'
        ];

        $validator = Validator::make($data, [
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ], $message);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors()->all()
            ]);
        } else {
            Contact::create([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'telepon' => $data['telepon'],
                'subjek' => $data['subjek'],
                'pesan' => $data['pesan'],            
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Terima kasih atas masukkannya..'
            ]);
        }        
    }
}
