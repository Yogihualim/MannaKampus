<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktg_Jumat extends Model
{
    protected $table = 'katalog_jumat';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_katalog_jumat',
        'image_katalog_J'
    ];

}
