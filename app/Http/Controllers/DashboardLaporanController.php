<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardLaporanController extends Controller
{
    public function index()
    {
        // if (request()->ajax()) {
        //     $dates = explode('to', request()->date_ranges);
        //     $dates[0] = Carbon::createFromFormat('d F Y', $dates[0])->format('Y-m-d');
        //     $dates[1] = Carbon::createFromFormat('d F Y', $dates[1])->format('Y-m-d');
        // } else {
        // }
    }
}
