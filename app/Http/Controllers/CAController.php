<?php

namespace App\Http\Controllers;

use App\Models\DataC;
// use Illuminate\Http\Request;

class CAController extends Controller
{
    public function cac()
    {
        $dbmotor = DataC::paginate(6);
        return view('cac', ['dbmotor' => $dbmotor]);
    }
}
