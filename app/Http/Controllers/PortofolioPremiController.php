<?php

namespace App\Http\Controllers;

use App\Models\DataP;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class PortofolioPremiController extends Controller
{
    public function portofoliopremi (Request $request)
    {
        if ($request->ajax()) {

            //$dbmotor = DB::table('dbmotor')->get(['id', 'nopolisi', 'mfg_yr', 'insrd_pr_nm', 'br_id', 'pol_num', 'awal', 'akhir', 'chassis_num', 'engine_num', 'curr', 'inst_amt', 'inv_num', 'Ket', 'prodr_dt']);
            $dbportofolio_premi = DataP::select('*');

            //return Datatables::of($dbmotor)->make(true);
            return Datatables::eloquent(DataP::query())
                         ->limit(function ($dbportofolio_premi) {
                             $dbportofolio_premi->where('id', '>', request('start'));
                         })
                        //  ->setTotalRecords(600000)
                         ->make(true);

        }

        return view('portofoliopremi');
    }



}
