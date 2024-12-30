<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function ViewData()
    {
        $finances = Finance::all();
        return view('dashboard', compact('finances'));
    }
}
