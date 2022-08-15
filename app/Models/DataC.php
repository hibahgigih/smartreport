<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataC extends Model
{
    public $table = "dbmotor";
    use HasFactory;
    protected $hidden = ['ID'];
    protected $fillable = [
        'ID',
        'nopolisi',
        'mfg_yr',
        'insrd_pr_nm',
        'br_id',
        'pol_num',
        'renew_num',
        'updt_num',
        'risk_num',
        'awal',
        'akhir',
        'chassis_num',
        'engine_num',
        'curr',
        'inst_amt',
        'inv_num',
        'Ket',
        'prodr_dt',
    ];

    public function getFullNoPolis()
    {
        return "{$this->br_id} {$this->pol_num}";
    }
}
