<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCare extends Model
{
    protected $table = 'data_customercare';
    protected $fillable = [
        'nama_customer',
        'email_customer',
        'nohp_customer',
        'cabang_customer',
        'kategori_customer',
        'pesan_customer'
    ];
}
