<?php

namespace App\Http\Controllers;

use App\Models\DataB;
// use Illuminate\Http\Request;

class BondingController extends Controller
{
    public function bonding()
    {
        $dbbonding = DataB::paginate(8);
        return view('bonding', ['dbbonding' => $dbbonding]);
    }
}
