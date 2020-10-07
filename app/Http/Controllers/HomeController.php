<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $d = strtotime("today"); 
        $calls = DB::select('SELECT COUNT(roadid) AS "calltoday" FROM roadaccidents  WHERE roadate = ? ',[$d]);

        $active = DB::select('SELECT COUNT(evacuationstatus.centerid) AS "activecenter" FROM evacuationstatus JOIN evacuations ON
        evacuationstatus.centerid = evacuations.centerid WHERE evacuationstatus.active = "active" ');

        $laman = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, (evacuations.capacity - evacuationstatus.numberofper) as natira 
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity > evacuationstatus.numberofper');
 
        $sobra =  DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, evacuations.capacity, (evacuationstatus.numberofper - evacuations.capacity) as sobra 
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity < evacuationstatus.numberofper');

        $pangalan = DB::select('SELECT evacuations.centername as dito FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity < evacuationstatus.numberofper
        UNION
        SELECT evacuations.centername as dito FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity > evacuationstatus.numberofper ');

        $pangalan = array_column($pangalan, 'dito');

        $viewer = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper as kulang FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity > evacuationstatus.numberofper ');
        $viewer = array_column($viewer, 'kulang');

        $click = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper as full FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity < evacuationstatus.numberofper ');
        $click = array_column($click, 'full');

        $taon = DB::select('SELECT DISTINCT(reyear) as ikaw FROM reliefdonations');
        $countyear = DB::select('SELECT DISTINCT(recordyear) as recor FROM recordisaster');
        $peryear = DB::select('SELECT DISTINCT(callyear) as ako FROM disastercall');
        $perincident = DB::select('SELECT DISTINCT(yearda) as numyear FROM roadaccidents');

        $cas = DB::select('SELECT disastercall.callyear, disasters.disastertype, disastercasualties.numinjured, disastercasualties.numdeaths, 
        disastercasualties.estdamage, disastercasualties.dmgdescrip FROM disastercall JOIN disasters ON disastercall.disasterid = disasters.disasterid
        JOIN disastercasualties ON disastercall.disid = disastercasualties.disid');
      
        return view('home')
        ->with('pangalan',json_encode($pangalan,JSON_NUMERIC_CHECK))
        ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
        ->with('click',json_encode($click,JSON_NUMERIC_CHECK))
        ->with('calls',$calls)
        ->with('cas', $cas)
        ->with('laman', $laman)
        ->with('sobra', $sobra)
        ->with('countyear', $countyear)
        ->with('perincident', $perincident)
        ->with('peryear', $peryear)
        ->with('taon', $taon)
        ->with('active', $active);
    }

    public function itstaff()
    {
        $selects = DB::select('SELECT evacuations.centerid, evacuations.centername FROM evacuations JOIN
        evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active = "active"');

        $inactive = DB::select('SELECT evacuations.centerid, evacuations.centername FROM evacuations JOIN
        evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active = "not active"');

        return view('evaland')
        ->with('inactive', $inactive)
        ->with('selects', $selects);
    }



}
