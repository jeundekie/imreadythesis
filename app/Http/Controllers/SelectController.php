<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SelectController extends Controller
{
    public function selectcenter(Request $request)
    {
        $centerid = $request->get('centerid');

        $total = DB::select('SELECT COUNT(centerid) AS "active" FROM evacuationstatus WHERE active= "active" ');

        $sel = DB::select('SELECT evacuations.centerid, evacuations.centername, evacuationstatus.numberofper,
        evacuations.capacity, evacuationstatus.numcan, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuations.centerid = ?', [$centerid]);
        
        $indi = DB::select('SELECT namedonate, description, redate FROM reliefdonations WHERE centerid =?
        UNION 
        SELECT whogive, descripgoods, releasedate FROM reliefstatus WHERE centerid=? AND remarks ="received"',[$centerid, $centerid]);
        
        if(empty ($sel) ) {
            return view('page.auth');
        }else{
            return view('itstaff')
            ->with('indi', $indi)
            ->with('total', $total)
            ->with('sel', $sel);
            // print_r($sel);
        }
        
        
    }

    public function refresh(Request $request, $centerid)
    {
        //$centerid = $request->get('centerid');
        
        $total = DB::select('SELECT COUNT(centerid) AS "active" FROM evacuationstatus WHERE active= "active" ');

        $sel = DB::select('SELECT evacuations.centerid, evacuations.centername, evacuationstatus.numberofper,
        evacuations.capacity, evacuationstatus.numcan, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuations.centerid = ?', [$centerid]);
        
        $indi = DB::select('SELECT namedonate, description, redate FROM reliefdonations WHERE centerid =?
        UNION 
        SELECT whogive, descripgoods, releasedate FROM reliefstatus WHERE centerid=? AND remarks ="received"',[$centerid, $centerid]);
        
        return view('itstaff')
        ->with('total', $total)
        ->with('indi', $indi)
        ->with('sel', $sel);

    }

    public function updatecen($centerid)
    {
        $up = DB::update('UPDATE evacuationstatus SET active ="not active", numberofper= 0, numcan= 0, timeupdate= NULL,
        dateadds =NULL, contactperson=NULL, phonenumber=NULL, timeto=NULL, timefrom=NULL WHERE centerid=?',[$centerid]);
        
        return redirect('/itstaff')->with('danger', 'Reset Successfully');
    }


    public function auto()
    {
        return view('page.auth');
    }

    public function updatecenter(Request $request)
    {
        $centerid = $request->get('centerid');
        $contactperson = $request->get('contactperson');
        $phonenumber = $request->get('phonenumber');
        $timeto = $request->get('timeto');
        $timefrom = $request->get('timefrom');

        $update = DB::update('UPDATE evacuationstatus SET contactperson=?, phonenumber=?, timeto=?, timefrom=?, active = "active" 
        WHERE centerid =?', [$contactperson, $phonenumber, $timeto, $timefrom, $centerid]);
        
        return redirect('/itstaff')->with('success', 'Updated Successfully');
    }

    public function addper(Request $request)
    {
        
        $centerid = $request->get('centerid');
        $id = $request->get('id');
        $num = $request->get('num');
        $timeda = $request->get('timeda');
        $datetimeupda = $request->get('datetimeupda');
        $numberofper = $request->get('numberofper');
        $numcan = $request->get('numcan');

        $insertper = DB::insert('INSERT INTO addinfo(centerid, id,num, timeda, datetimeupda)
        VALUE (?, ?, ?, ?, ?)', [$centerid, $id, $num, $timeda, $datetimeupda]); 

        $updatenum = DB::update('UPDATE evacuationstatus SET numberofper = ?, numcan =?, timeupdate =?, dateadds=?
        WHERE centerid =?', [$numberofper, $numcan, $timeda, $datetimeupda, $centerid]);

        $total = DB::select('SELECT COUNT(centerid) AS "active" FROM evacuationstatus WHERE active= "active" ');

        $sel = DB::select('SELECT evacuations.centerid, evacuations.centername, evacuationstatus.numberofper,
        evacuations.capacity, evacuationstatus.numcan, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuations.centerid = ?', [$centerid]);
       
       $indi = DB::select('SELECT namedonate, description, redate FROM reliefdonations WHERE centerid =?
       UNION 
       SELECT whogive, descripgoods, releasedate FROM reliefstatus WHERE centerid=? AND remarks ="received"',[$centerid, $centerid]);
       
        
        return view('itstaff')
        ->with('total', $total)
        ->with('indi', $indi)
        ->with('sel', $sel);
        
    }

    public function upminus(Request $request)
    {
        $centerid = $request->get('centerid');
        $id = $request->get('id');
        $dito = $request->get('dito');
        $timeupdate = $request->get('timeupdate');
        $dateadds = $request->get('dateadds');
        $numberofper = $request->get('numberofper');
        $numcan = $request->get('numcan');
        

        $updatenum = DB::update('UPDATE evacuationstatus SET numberofper = ?, numcan =?, timeupdate =?, dateadds=?
        WHERE centerid =?', [$numberofper, $numcan, $timeupdate, $dateadds, $centerid]);

        $insertper = DB::insert('INSERT INTO minusinfo(centerid, id,numminus, numper, nucan, timeget, datereceived)
        VALUE (?, ?, ?, ?, ?,?,?)', [$centerid, $id, $dito, $numberofper, $numcan, $timeupdate, $dateadds]); 

        /*
        $total = DB::select('SELECT COUNT(centerid) AS "active" FROM evacuationstatus WHERE active= "active" ');

        $sel = DB::select('SELECT evacuations.centerid, evacuations.centername, evacuationstatus.numberofper,
        evacuations.capacity, evacuationstatus.numcan, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuations.centerid = ?', [$centerid]);
        
        return view('itstaff')
        ->with('total', $total)
        ->with('sel', $sel);
        */
        
        return redirect('/itstaff')->with('success', 'Inserted Successfully');

    }

    public function relief(Request $request, $centerid)
    {
        //$centerid = $request->get('centerid');

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
        ->with('latest', $latest)
        ->with('lasclothes', $lasclothes)
        ->with('lasmedicine', $lasmedicine)
        ->with('lastneeded', $lastneeded)
        ->with('mcgive', $mcgive)
        ->with('clothes', $clothes)
        ->with('medicine', $medicine)
        ->with('foods', $foods)
        ->with('req', $req)
        ->with('selcon', $selcon)
        ->with('donator', $donator)
        ->with('selcenter', $selcenter);
    } 


    public function reliefup(Request $request)
    {
        $centerid = $request->get('centerid');
        $reliefid = $request->get('reliefid');
        $reliefrequest = $request->get('reliefrequest');
        $lastupdate = $request->get('lastupdate');
        $lastdate = $request->get('lastdate');
        $remarks = $request->get('remarks');
        $id = $request->get('id');

        $d = date('F d, Y');

        $updatenum = DB::update('UPDATE reliefmaptable SET reliefid = ?, reliefrequest =?, lastupdate =?, lastdate=?
        WHERE centerid =?', [$reliefid, $reliefrequest, $lastupdate, $lastdate, $centerid]);

        $insertper = DB::insert('INSERT INTO requestable(centerid, reliefid, id, refquest, timreq, datereq, remarks)
        VALUE (?, ?, ?, ?, ?, ?, ?)', [$centerid, $reliefid, $id, $reliefrequest, $lastupdate, $lastdate, $remarks]);

        $donator = DB::select('SELECT users.name, reliefs.reliefcategory, reliefdonations.namedonate, reliefdonations.description, reliefdonations.redate, reliefdonations.reyear,reliefdonations.images 
        FROM reliefdonations JOIN reliefs ON reliefs.reliefid = reliefdonations.reliefid JOIN users ON users.id = reliefdonations.id WHERE reliefdonations.centerid=?',[$centerid]);

        $mcgive = DB::select('SELECT reliefstatus.statid, reliefs.reliefcategory, reliefstatus.descripgoods, reliefstatus.releasedate, users.name, reliefstatus.images, reliefstatus.remarks,
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
        ->with('selcenter', $selcenter);


    }

    public function addonate(Request $request)
    {
        $d = date('F d, Y');
        $reliefid = $request->get('reliefid');
        $centerid = $request->get('centerid');
        $id = $request->get('id');
        $namedonate = $request->get('namedonate');
        $description = $request->get('description');
        $redate = $request->get('redate');
        $reyear = $request->get('reyear');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        
        if(request()->has('images'))
        {

            $avataruploaded = request()->file('images');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath, $avatarname);

                
            $ins = DB::insert('INSERT INTO reliefdonations(reliefid, centerid, id, namedonate, description, redate, reyear, images)
            VALUE (?, ?, ?, ?, ?, ?, ?,?)', [$reliefid, $centerid, $id, $namedonate, $description, $redate, $reyear, '/images/'. $avatarname]);
    
        }
      
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
        ->with('success', 'Inserted Successfully');

    }

    public function getback(Request $request)
    {
        $centerid = $request->get('centerid');

        $total = DB::select('SELECT COUNT(centerid) AS "active" FROM evacuationstatus WHERE active= "active" ');

        $sel = DB::select('SELECT evacuations.centerid, evacuations.centername, evacuationstatus.numberofper,
        evacuations.capacity, evacuationstatus.numcan, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuations.centerid = ?', [$centerid]);
        
        $indi = DB::select('SELECT namedonate, description, redate FROM reliefdonations WHERE centerid =?
        UNION 
        SELECT whogive, descripgoods, releasedate FROM reliefstatus WHERE centerid=? AND remarks ="received"',[$centerid, $centerid]);

          
        return view('itstaff')
        ->with('total', $total)
        ->with('indi', $indi)
        ->with('sel', $sel);

    } 
    


    public function casualties(Request $request)
    {
        if($request->input('callyear'))
        {
     
            $numdisaster = $this->kuhadisaster($request->input('callyear'));
        
                  foreach($numdisaster->toArray() as $row)
                {
       
                    $output[] = array(
                        'incidente'  => $row->incidente,
                        'totalcasualties' => floatval($row->totalcasualties),
                        'namatay' => floatval($row->namatay),
                        'sugat' => floatval($row->sugat)
                     );
                }
     
           echo json_encode($output);
            
        }
    }

     function kuhadisaster($callyear)
    {
        $data = DB::table('disastercall')
        ->join('disastercasualties','disastercall.disid','=','disastercasualties.disid')
        ->join('disasters','disastercall.disasterid','=','disasters.disasterid')
        ->select(DB::raw('Distinct(disasters.disastertype) as incidente'), DB::raw('Sum(disastercasualties.estdamage) as totalcasualties'),
        DB::raw('Sum(disastercasualties.numdeaths) as namatay'), DB::raw('Sum(disastercasualties.numinjured) as sugat'))
        ->where('callyear','=', $callyear)
        ->groupBy('disastercall.disasterid')
        ->get();

        return $data;
    }

    public function totalincident(Request $request)
    {
        if($request->input('yearda'))
        {

            $numdisaster = $this->kuhaincidente($request->input('yearda'));

                  foreach($numdisaster->toArray() as $row)
                {
                    $output[] = array(
                        'klase'  => $row->klase,
                        'totalincident' => floatval($row->totalincident)
                     );
                }
     
           echo json_encode($output);
            
        }
    }

    function  kuhaincidente($yearda)
    {
         $data = DB::table('roadaccidents')
         ->join('accidentdetails','roadaccidents.roadid','=','accidentdetails.roadid')
         ->join('accidentcategorys','accidentdetails.incidentid','=','accidentcategorys.incidentid')
         ->select(DB::raw('Distinct(accidentcategorys.incident) as klase'), DB::raw('Count(accidentdetails.incidentid) as totalincident'))
         ->where('roadaccidents.yearda','=', $yearda)
         ->groupBy('accidentdetails.incidentid')
         ->get();

         return $data;
    }

    public function countincident(Request $request)
    {
        if($request->input('yearda'))
        {
     
            $disaster = $this->totalinci($request->input('yearda'));
                  foreach($disaster->toArray() as $row)
                {   
                   $output = $row->totinci;         
                }
           echo json_encode($output); 
        }
    }

    function totalinci($yearda)
    {
        $data = DB::table('roadaccidents')
        ->join('accidentdetails','roadaccidents.roadid','=','accidentdetails.roadid')
        ->select(DB::raw('Count(accidentdetails.roadid) as totinci'))
        ->where('yearda','=', $yearda)
        ->get();

        return $data;
    }

    public function natural(Request $request)
    {
        if($request->input('recordyear'))
        {
     
            $disaster = $this->totalnatural($request->input('recordyear'));
                  foreach($disaster->toArray() as $row)
                {   
                   $output = $row->totalnat;          
                }
           echo json_encode($output); 
        }
    }

    function totalnatural($recordyear)
    {
        $data = DB::table('recordisaster')
        ->select(DB::raw('Count(disasterid) as totalnat'))
        ->where('recordyear','=',$recordyear)
        ->get();

        return $data;
    }

    public function updatestatus($centerid)
    {
    
            $data = DB::update('UPDATE requestable SET remarks="respond" WHERE centerid=?',[$centerid]);
            $datare = DB::update('UPDATE reliefmaptable SET reliefid= 5 WHERE centerid=?',[$centerid]);
           
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

}
