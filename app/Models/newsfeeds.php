<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsfeeds extends Model
{
    use HasFactory;
    
    protected $table = 'newsfeeds';

protected $fillable = [
    'id_writer',
    'nama_writer',
    'judul',
    'tag',
    'media',
    'isi',
    'kategori',
    'status',
];
}
