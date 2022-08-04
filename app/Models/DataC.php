<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataC extends Model
{
    public $table = "dbmotor";
    use HasFactory;
    protected $fillable = [
        'nopolisi',
        'mfg_yr',
        'insrd_pr_nm',
        'chassis_num',
        'engine_num',
        'awal',
        'akhir',
        'inst_amt',
    ];
}
