<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_Homepage extends Model
{
    protected $table = 'homepages';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_foto',
        'image_home'
    ];
}
