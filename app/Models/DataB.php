<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataB extends Model
{
    public $table = "dbbonding";
    use HasFactory;
    protected $fillable = [
        'ID',
        'branch',
        'br_id',
        'cob_id',
        'pol_num',
        'renew_num',
        'Principal',
        'Tanggal',
        'Nilai_jaminan',
        'Jenis_Jaminan',
        'Mulai_Pertanggungan',
        'Akhir_Pertanggungan',
        'Today',
        'Hari',
        '_Status_',
    ];
}
