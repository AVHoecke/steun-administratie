<?php

namespace App\Http\Controllers;

use Hamcrest\Core\IsNot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)   
    {
        if ($request->has('familieNaam')){
            $objectToQueryFor = ['Naam', 'like', '%'.$request->familieNaam.'%'];
        } else {
            $objectToQueryFor = ['ID Gezin', 'like', '1'];
        }
        try {
            $gezinnen = DB::connection('mssql')->table('wvg.Gezin')->where($objectToQueryFor[0],$objectToQueryFor[1],$objectToQueryFor[2])->get();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        return view('index', ['gezinnen' => $gezinnen]);
    }
}