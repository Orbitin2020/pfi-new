<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    protected $table = 'client_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nm_category', 'created_at', 'updated_at'
    ];
}
