<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galeries';
    protected $fillable = [
        'admin_id','nama','deskripsi','gambar','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Galery_categories::class, 'category_id');
    }
}
