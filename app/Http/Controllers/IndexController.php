<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use Illuminate\Http\Request;


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
            $gezinnen = Gezin::getGezinnenByNaam($request->familieNaam);
        } else {
            $gezinnen = Gezin::getGezinnenByNaam("am");
        }
        return view('index', ['gezinnen' => $gezinnen]);
    }
}