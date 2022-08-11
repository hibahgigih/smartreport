<?php

namespace App\Http\Controllers;

use App\Models\DataP;
use Illuminate\Support\Facades\DB;

class PortofolioPremiController extends Controller
{
    public function portofoliopremi()
    {
         $portofoliopremi = DB::table('dbportofolio_premi')->paginate();
        //$portofoliopremi = DataP::all();
        return view('portofoliopremi', ['dbportofolio_premi' => $portofoliopremi]);
    }
}
