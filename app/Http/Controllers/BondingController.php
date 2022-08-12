<?php

namespace App\Http\Controllers;

use App\Models\DataB;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class BondingController extends Controller
{
    public function bonding (Request $request)
    {
        if ($request->ajax()) {

            //$dbmotor = DB::table('dbmotor')->get(['id', 'nopolisi', 'mfg_yr', 'insrd_pr_nm', 'br_id', 'pol_num', 'awal', 'akhir', 'chassis_num', 'engine_num', 'curr', 'inst_amt', 'inv_num', 'Ket', 'prodr_dt']);
            $dbbonding = DataB::select('*');

            //return Datatables::of($dbbonding)->make(true);
            return Datatables::eloquent(DataB::query())
                         ->limit(function ($dbbonding) {
                             $dbbonding->where('id', '>', request('start'));
                         })
                        //  ->setTotalRecords(600000)
                         ->make(true);

        }

        return view('bonding');
    }



}
