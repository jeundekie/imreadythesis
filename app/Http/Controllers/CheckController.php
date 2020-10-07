<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    public function seedetails(Request $request, $centerid)
    {
        $getinfo = DB::select('SELECT namedonate, description, redate FROM reliefdonations WHERE centerid =?
        UNION 
        SELECT whogive, descripgoods, releasedate FROM reliefstatus WHERE centerid=? AND remarks ="received"',[$centerid, $centerid]);

        $getcen = DB::select('SELECT centername FROM evacuations WHERE centerid=?',[$centerid]);
        return view('filter.check')
        ->with('getcen', $getcen)
        ->with('getinfo', $getinfo);

    }


    public function respondup(Request $request, $reqid)
    {
        $upres = DB::update('UPDATE requestable SET remarks="respond" WHERE reqid=?',[$reqid]);

        return redirect('/add')->with('info', 'Updated Successfully');
    }

 
    public function getcasual()
    {
        

    }
}
