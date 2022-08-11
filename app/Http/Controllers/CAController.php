<?php

namespace App\Http\Controllers;

use App\Models\DataC;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class CAController extends Controller
{
    public function cac (Request $request)
    {
        if ($request->ajax()) {

            //$dbmotor = DB::table('dbmotor')->get(['id', 'nopolisi', 'mfg_yr', 'insrd_pr_nm', 'br_id', 'pol_num', 'awal', 'akhir', 'chassis_num', 'engine_num', 'curr', 'inst_amt', 'inv_num', 'Ket', 'prodr_dt']);
            $dbmotor = DataC::select('*');

            //return Datatables::of($dbmotor)->make(true);
            return Datatables::eloquent(DataC::query())
                         ->limit(function ($dbmotor) {
                             $dbmotor->where('id', '>', request('start'));
                         })
                        //  ->setTotalRecords(600000)
                         ->make(true);

        }

        return view('cac');
    }



}
