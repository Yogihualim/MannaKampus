<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsCare extends Model
{
    protected $table = 'customer_care';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_cus',
        'email_cus',
        'pilih_cabang',
        'keluhan',
        'pesan'
    ];

    // /**
    //  * Set the categories
    //  *
    //  */
    // public function setCabang($value)
    // {
    //     $this->attributes['pilih_cabang'] = json_encode($value);
    // }
    // public function setKeluhan($value2)
    // {
    //     $this->attributes['keluhan'] = json_encode($value2);
    // }

    // /**
    //  * Get the categories
    //  *
    //  */
    // public function getCabang($value)
    // {
    //     return $this->attributes['pilih_cabang'] = json_decode($value);
    // }
    // public function getKeluhan($value2)
    // {
    //     return $this->attributes['keluhan'] = json_decode($value2);
    // }
}
