<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktg_Event extends Model
{
    protected $table = 'katalog_event';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_katalog_event',
        'image_katalog_E'
    ];
}
