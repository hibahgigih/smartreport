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
        'Sub_Main_Product',
        'Nama_Tertanggung',
        'Alamat_Risiko',
        'Premium_Name',
        'Broker_Name',
        'Other_Name',
        'Geofgrafi_Area',
        'Sumber_Bisnis',
        'Pemberi_Bisnis',
        'Pembawa_Bisnis',
        'uw_yr',
        'Mata_uang',
        'Kurs',
        'Tgl_Awal',
        'Tgl_Akhir',
        'Tgl_Trans',
        'Status_Polis',
        'TSI',
        'TSI_100',
        'PREMI',
        'OUTGO',
        'tga_pct',
        'your_ref_num',
        'DNCN',
        'Tgl_Nota',
        'NoVoucher',
        'Tgl_Voucher',
    ];
}
