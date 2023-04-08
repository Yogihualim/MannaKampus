<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilTest extends Model
{
    protected $table = 'hasil_test';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_hasil_test',
        'pdf_HT'
    ];
}
