<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReliefController extends Controller
{
    public function reliefupdate(Request $request)
    {
       
        $centerid = $request->get('centerid');
        $id = $request->get('id');
        $statid = $request->get('statid');
        $description = $request->get('description');
        $reliedupdate = $request->get('reliedupdate');
        $relieftimeupdate = $request->get('relieftimeupdate');
        $remark = $request->get('remark');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);


                $insup = DB::insert('INSERT INTO reliefupdate(centerid, id, statid, description, reliedupdate, relieftimeupdate, images, remark)
                VALUE(?,?,?,?,?,?,?,?)',[$centerid, $id, $statid, $description, $reliedupdate, $relieftimeupdate, '/images/'. $avatarname, $remark]);
                
                $ups = DB::update('UPDATE reliefstatus SET remarks="received" WHERE statid=?',[$statid]);

                $d = date('F d, Y'); 

        $donator = DB::select('SELECT users.name, reliefs.reliefcategory, reliefdonations.namedonate, reliefdonations.description, reliefdonations.redate, reliefdonations.reyear,reliefdonations.images 
        FROM reliefdonations JOIN reliefs ON reliefs.reliefid = reliefdonations.reliefid JOIN users ON users.id = reliefdonations.id WHERE reliefdonations.centerid=?',[$centerid]);

        $mcgive = DB::select('SELECT  reliefstatus.statid, reliefs.reliefcategory, reliefstatus.descripgoods, reliefstatus.releasedate, users.name, reliefstatus.images, reliefstatus.remarks,
        TIME_FORMAT(reliefstatus.releasetime, "%I:%i %p") as relet FROM reliefs JOIN reliefstatus ON reliefs.reliefid = reliefstatus.reliefid JOIN users ON users.id = reliefstatus.id 
        WHERE reliefstatus.centerid=?',[$centerid]);

        $req = DB::select('SELECT reliefs.reliefcategory, users.name, requestable.refquest, requestable.datereq,
        TIME_FORMAT(requestable.timreq, "%I:%i %p") as timepass FROM requestable JOIN reliefs ON reliefs.reliefid = requestable.reliefid
        JOIN users ON users.id = requestable.id WHERE requestable.centerid=?',[$centerid]);

        $selcenter = DB::select('SELECT centerid, centername FROM evacuations WHERE centerid=?', [$centerid]);  

       
        $selcon = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 4 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $clothes = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 2 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $medicine = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 3 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $foods = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 1 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);

        $latest = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 1 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lasclothes = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 2 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lasmedicine = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 3 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lastneeded = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 4 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);

        return view('staff.evarelief')
        ->with('req', $req)
        ->with('latest', $latest)
        ->with('lasclothes', $lasclothes)
        ->with('lasmedicine', $lasmedicine)
        ->with('lastneeded', $lastneeded)
        ->with('mcgive', $mcgive)
        ->with('clothes', $clothes)
        ->with('medicine', $medicine)
        ->with('foods', $foods)
        ->with('selcon', $selcon)
        ->with('donator', $donator)
        ->with('selcenter', $selcenter)
        ->with('success', 'Updated Successfully');
                //return redirect('/itstaff')->with('success', 'Submitted Successfully See other Center?');

        }
    


    }


    public function excessupdate(Request $request)
    {
        $centerid = $request->get('centerid');
        $reliefid = $request->get('reliefid');
        $id = $request->get('id');
        $descripgo = $request->get('descripgo');
        $excedate = $request->get('excedate');
        $excetime = $request->get('excetime');
        $remarks = $request->get('remarks');


        
        $insup = DB::insert('INSERT INTO excessrelief(centerid, id, reliefid, descripgo, excedate, excetime, remarks)
        VALUE(?,?,?,?,?,?,?)',[$centerid, $id, $reliefid, $descripgo, $excedate, $excetime, $remarks]);
        
        //$ups = DB::update('UPDATE reliefstatus SET remarks="received" WHERE statid=?',[$statid]);


        $d = date('F d, Y'); 

        $donator = DB::select('SELECT users.name, reliefs.reliefcategory, reliefdonations.namedonate, reliefdonations.description, reliefdonations.redate, reliefdonations.reyear,reliefdonations.images 
        FROM reliefdonations JOIN reliefs ON reliefs.reliefid = reliefdonations.reliefid JOIN users ON users.id = reliefdonations.id WHERE reliefdonations.centerid=?',[$centerid]);

        $mcgive = DB::select('SELECT  reliefstatus.statid, reliefs.reliefcategory, reliefstatus.descripgoods, reliefstatus.releasedate, users.name, reliefstatus.images, reliefstatus.remarks,
        TIME_FORMAT(reliefstatus.releasetime, "%I:%i %p") as relet FROM reliefs JOIN reliefstatus ON reliefs.reliefid = reliefstatus.reliefid JOIN users ON users.id = reliefstatus.id 
        WHERE reliefstatus.centerid=?',[$centerid]);

        $req = DB::select('SELECT reliefs.reliefcategory, users.name, requestable.refquest, requestable.datereq,
        TIME_FORMAT(requestable.timreq, "%I:%i %p") as timepass FROM requestable JOIN reliefs ON reliefs.reliefid = requestable.reliefid
        JOIN users ON users.id = requestable.id WHERE requestable.centerid=?',[$centerid]);

        $selcenter = DB::select('SELECT centerid, centername FROM evacuations WHERE centerid=?', [$centerid]);  

       
        $selcon = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 4 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $clothes = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 2 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $medicine = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 3 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);
        $foods = DB::select('SELECT COUNT(reliefid) AS "request" FROM requestable WHERE reliefid= 1 AND centerid=? AND datereq=? AND remarks ="no respond"', [$centerid, $d]);

        $latest = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 1 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lasclothes = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 2 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lasmedicine = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 3 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);
        $lastneeded = DB::select('SELECT datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 4 AND centerid=?  AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1',[$centerid]);

        return view('staff.evarelief')
        ->with('req', $req)
        ->with('latest', $latest)
        ->with('lasclothes', $lasclothes)
        ->with('lasmedicine', $lasmedicine)
        ->with('lastneeded', $lastneeded)
        ->with('mcgive', $mcgive)
        ->with('clothes', $clothes)
        ->with('medicine', $medicine)
        ->with('foods', $foods)
        ->with('selcon', $selcon)
        ->with('donator', $donator)
        ->with('selcenter', $selcenter)
        ->with('success', 'Updated Successfully');

    }


    public function getinfo()
    {

        $incident = DB::select('SELECT accidentcategorys.incident, accidentdetails.victimname, accidentdetails.vicaddress, accidentdetails.vicage,
        accidentdetails.vicnumber, accidentdetails.timeincident, accidentdetails.typerun, trauma.lesscon, trauma.levelcon, trauma.injuries,
        trauma.assesment FROM accidentdetails JOIN accidentcategorys ON accidentdetails.incidentid = accidentcategorys.incidentid JOIN trauma ON
        accidentdetails.roadid = trauma.roadid');


        $medfinal = DB::select('SELECT accidentcategorys.incident, accidentdetails.victimname, accidentdetails.vicaddress, accidentdetails.vicage,
        accidentdetails.vicnumber, accidentdetails.timeincident, accidentdetails.typerun, medical.medhis, medical.illness, medical.assesment  FROM accidentdetails JOIN accidentcategorys ON accidentdetails.incidentid = accidentcategorys.incidentid
        JOIN medical ON accidentdetails.roadid = medical.roadid');


        $obfinal = DB::select('SELECT accidentcategorys.incident, accidentdetails.victimname, accidentdetails.vicaddress, accidentdetails.vicage,
        accidentdetails.vicnumber, accidentdetails.timeincident, accidentdetails.typerun, obtable.painscale, obtable.lmp, obtable.aog, obtable.edd, obtable.apgarscore, obtable.notes  FROM accidentdetails JOIN accidentcategorys ON accidentdetails.incidentid = accidentcategorys.incidentid
        JOIN obtable ON accidentdetails.roadid = obtable.roadid');


        return view('filter.incident')
        ->with('obfinal', $obfinal)
        ->with('medfinal', $medfinal)
        ->with('incident', $incident);
    }

}
