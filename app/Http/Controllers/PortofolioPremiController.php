<?php

namespace App\Http\Controllers;

use App\Models\DataP;
// use Illuminate\Support\Facades\DB;

class PortofolioPremiController extends Controller
{
    public function portofoliopremi()
    {
        $portofoliopremi = DataP::paginate(8);
        // $portofoliopremi = DataP::all();
        return view('portofoliopremi', ['dbportofolio_premi' => $portofoliopremi]);
    }
}
