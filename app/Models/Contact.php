<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'telepon', 'subjek', 'pesan', 'created_at', 'updated_at'
    ];
}
