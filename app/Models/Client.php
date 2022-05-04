<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id', 'nama', 'deskripsi', 'link', 'gambar', 'created_at', 'updated_at'
    ];

    public function categoryClient() {
        return $this->hasOne(ClientCategory::class, 'id', 'category_id');
    }
}
