<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktg_Tanggal_Muda extends Model
{
    protected $table = 'katalog_tanggal_muda';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_katalog_tanggal_muda',
        'image_katalog_TM'
    ];
}
