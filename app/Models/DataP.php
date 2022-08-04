<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataP extends Model
{
    public $table = "dbportofolio_premi";
    use HasFactory;
    protected $fillable = [
        'Id',
        'br_nm',
        'nopolis',
        'Main_Product',
        'Nama_Tertanggung',
        'Tgl_Awal',
        'Tgl_Akhir',
        'PREMI',
    ];
}
