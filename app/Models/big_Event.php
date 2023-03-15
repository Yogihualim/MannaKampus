<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class big_Event extends Model
{
    protected $table = 'big_event';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_big_event',
        'image_BE'
    ];
}
