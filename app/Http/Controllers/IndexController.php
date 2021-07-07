<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index()
    {
        $gezinnen = DB::connection('mssql')->select('select * FROM ID332732_WVG.wvg.Gezin g', [1]);

        return view('index', ['gezinnen' => $gezinnen]);
    }
}
