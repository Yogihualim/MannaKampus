<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoLowongan extends Model
{
    protected $table = 'info_lowongan';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_info_lowongan',
        'image_IL'
    ];
}
