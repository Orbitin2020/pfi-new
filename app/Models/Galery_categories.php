<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery_categories extends Model
{
    protected $table = 'galery_categories';
    protected $fillable = [
        'nama'
    ];

    public function galery()
    {
        return $this->hasOne(Galery::class, 'id');
    }
}
