<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = [
        'admin_id','judul','slug','detail','gambar','kategori'
    ];
}
