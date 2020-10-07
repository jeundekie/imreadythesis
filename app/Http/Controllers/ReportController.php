<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    
    public function sample()
    {

        //Code For Map
        $results = DB::select('SELECT brgyname,iconpic FROM barangays ');
        $ibon = DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, barangays.iconpic, evacuationstatus.numberofper
          FROM evacuationstatus JOIN evacuations ON evacuationstatus.centerid = evacuations.centerid JOIN barangays ON evacuations.brgyid = barangays.brgyid');
        
         //Code For Relief Map
         $reli = DB::select('SELECT reliefcategory,iconpic FROM reliefs ');
         $relimap = DB::select('SELECT evacuations.centerid, evacuations.brgyid, evacuations.centername, evacuations.centeraddress,  evacuations.capacity, evacuations.latitude, evacuations.longitude, 
               reliefs.reliefcategory, reliefs.iconpic, reliefs.reliefid, reliefmaptable.reliefrequest FROM evacuations JOIN reliefmaptable ON evacuations.centerid = reliefmaptable.centerid 
               JOIN reliefs ON reliefs.reliefid = reliefmaptable.reliefid');

        $latitude  = 14.3939;
        $longitude =  121.0412;
       
       //print_r($ibon);
       // print_r($aso);
       /*
        
        */ 
        return view('maps.evacuation')
        ->with('latitude', $latitude)
        ->with('longitude', $longitude)
        ->with('reli',$reli)
        ->with('relimap',$relimap)
        ->with('results', $results)
        ->with('ibon', $ibon);

        /*
        
        $relimap = DB::select('SELECT evacuations.centerid, evacuations.brgyid, evacuations.centername, evacuations.centeraddress,  evacuations.capacity, evacuations.latitude, evacuations.longitude, 
        reliefs.reliefcategory, reliefs.iconpic, reliefs.reliefid, reliefmaptable.reliefrequest FROM evacuations JOIN reliefmaptable ON evacuations.centerid = reliefmaptable.centerid 
        JOIN reliefs ON reliefs.reliefid = reliefmaptable.reliefid');

        $result = DB::select('SELECT brgyname,iconpic FROM barangays ');
        $ibon = DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, evacuations.persontocon, evacuations.phonenumber, barangays.iconpic  FROM evacuations JOIN barangays ON evacuations.brgyid = barangays.brgyid');
      
          //Code For Relief Map
          $reli = DB::select('SELECT reliefcategory,iconpic FROM reliefs ');
        


      $latitude  = 14.3939;
        $longitude =  121.0412;
       
    
       return view('maps.evacuation')
        ->with('latitude', $latitude)
        ->with('longitude', $longitude)
        ->with('reli',$reli)
        ->with('relimap',$relimap)
        ->with('result', $result)
        ->with('ibon', $ibon); 
         print_r($relimap);

         */
        
    }


    public function chartbar(Request $request)
    {
      $centerid = $request->get('centerid');
      $id = $request->get('id');
      $reliefid = $request->get('reliefid');
      $descripgoods = $request->get('descripgoods');
      $releasedate = $request->get('releasedate');
      $releasetime = $request->get('releasetime');
      $whogive = $request->get('whogive');
      $remarks = $request->get('remarks');
      $this->validate($request, [
       'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]); 

      if(request()->has('images'))
       {
      
           $avataruploaded = request()->file('images');
           $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
           $avatarpath = public_path('/images/');
           $avataruploaded->move($avatarpath, $avatarname);


           $insgoods = DB::insert('INSERT INTO reliefstatus(centerid, id, reliefid, descripgoods, releasedate, releasetime, whogive, remarks, images)
           VALUE(?,?,?,?,?,?,?,?,?)',[$centerid, $id, $reliefid, $descripgoods, $releasedate, $releasetime, $whogive, $remarks, '/images/'. $avatarname]);

           if($insgoods)  {
                 return redirect('/add')->with('success', 'Inserted Successfully');
           }
            else {

               return redirect('/add')->with('error', 'ERROR!!!');
           }

       }

        
    }

    public function getfull()
    { 
        $acci = DB::select('SELECT roadaccidents.roadid, accidentdetails.victimname, roadaccidents.incidentlocation, accidentdetails.assesment, accidentdetails.age, accidentdetails.descriptions,
        accidentdetails.remarks, accidentdetails.images, roadaccidents.victimgender, roadaccidents.team, roadaccidents.roadate, accidentcategorys.incident FROM
        roadaccidents JOIN accidentdetails ON roadaccidents.roadid = accidentdetails.roadid JOIN accidentcategorys ON roadaccidents.incidentid = accidentcategorys.incidentid ');

        //print_r($acci);
        return view('reports.acc')
        ->with('acci', $acci);
    }

    public function reliefadd()
    {
        $goods = DB::select('SELECT evacuations.centername, evacuations.centerid FROM evacuations JOIN evacuationstatus
        ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active = "active"');

        $reliefs = DB::select('SELECT reliefid, reliefcategory FROM reliefs WHERE reliefid != 5');

        $pasa = DB::select('SELECT evacuations.centerid, evacuations.centername, reliefs.reliefcategory, users.name, reliefstatus.descripgoods,
        reliefstatus.releasedate, reliefstatus.images, reliefstatus.remarks, TIME_FORMAT(reliefstatus.releasetime, "%I:%i %p") as tam FROM reliefstatus JOIN evacuations ON 
        reliefstatus.centerid = evacuations.centerid JOIN reliefs ON reliefstatus.reliefid = reliefs.reliefid JOIN users ON
        reliefstatus.id = users.id');

        $foodate = DB::select('SELECT datereq,  TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 1 AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1');
       
        $foods = DB::select('SELECT Count(reliefid) as damidona FROM requestable WHERE reliefid = 1 AND remarks ="no respond" Group By reliefid');
        $clothesdate = DB::select('SELECT datereq,  TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 2 AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1');
       
        $clothes = DB::select('SELECT Count(reliefid) as damidona FROM requestable WHERE reliefid = 2 AND remarks ="no respond" Group By reliefid');
        
        $medicinedate = DB::select('SELECT datereq,  TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 3 AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1');
       
        $medicine = DB::select('SELECT Count(reliefid) as damidona FROM requestable WHERE reliefid = 3 AND remarks ="no respond" Group By reliefid');

        $allneedate = DB::select('SELECT datereq,  TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable WHERE reliefid = 4 AND remarks ="no respond" ORDER BY reqid DESC LIMIT 1');
       
        $allneed = DB::select('SELECT Count(reliefid) as damidona FROM requestable WHERE reliefid = 4 AND remarks ="no respond" Group By reliefid');
        
        $getall = DB::select('SELECT requestable.reqid, evacuations.centerid, evacuations.centername, reliefs.reliefcategory, requestable.centerid, users.name, requestable.refquest,
        requestable.datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable JOIN evacuations ON requestable.centerid = evacuations.centerid
        JOIN users ON requestable.id = users.id JOIN reliefs ON reliefs.reliefid = requestable.reliefid WHERE requestable.reliefid = 4 AND requestable.remarks ="no respond"');

        $getfoods = DB::select('SELECT requestable.reqid, evacuations.centerid, evacuations.centername, reliefs.reliefcategory, requestable.centerid, users.name, requestable.refquest,
        requestable.datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable JOIN evacuations ON requestable.centerid = evacuations.centerid
        JOIN users ON requestable.id = users.id JOIN reliefs ON reliefs.reliefid = requestable.reliefid WHERE requestable.reliefid = 1 AND requestable.remarks ="no respond"');

        $getclothes = DB::select('SELECT requestable.reqid, evacuations.centerid, evacuations.centername, reliefs.reliefcategory, requestable.centerid, users.name, requestable.refquest,
        requestable.datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable JOIN evacuations ON requestable.centerid = evacuations.centerid
        JOIN users ON requestable.id = users.id JOIN reliefs ON reliefs.reliefid = requestable.reliefid WHERE requestable.reliefid = 2 AND requestable.remarks ="no respond"');

        $getmedicine = DB::select('SELECT requestable.reqid, evacuations.centerid, evacuations.centername, reliefs.reliefcategory, requestable.centerid, users.name, requestable.refquest,
        requestable.datereq, TIME_FORMAT(timreq, "%I:%i %p") as timedi FROM requestable JOIN evacuations ON requestable.centerid = evacuations.centerid
        JOIN users ON requestable.id = users.id JOIN reliefs ON reliefs.reliefid = requestable.reliefid WHERE requestable.reliefid = 3 AND requestable.remarks ="no respond"');

       $kuhadonasyon = DB::select('SELECT evacuations.centerid, evacuations.centername, users.name, reliefdonations.namedonate, reliefs.reliefcategory,
       reliefdonations.description, reliefdonations.redate, reliefdonations.images FROM reliefdonations JOIN evacuations ON reliefdonations.centerid = evacuations.centerid JOIN users ON
       reliefdonations.id = users.id JOIN reliefs ON reliefdonations.reliefid = reliefs.reliefid');

       $tira = DB::select('SELECT evacuations.centerid, evacuations.centername, users.name, reliefs.reliefcategory,
       excessrelief.descripgo, excessrelief.excedate FROM excessrelief JOIN evacuations ON excessrelief.centerid = evacuations.centerid JOIN users ON
       excessrelief.id = users.id JOIN reliefs ON excessrelief.reliefid = reliefs.reliefid');  

       $mcdrrmo = DB::select('SELECT receivedmc.namedonator, reliefs.reliefcategory, receivedmc.descigood, receivedmc.dategive,
       receivedmc.dateyear, receivedmc.images FROM receivedmc JOIN reliefs ON receivedmc.reliefid = reliefs.reliefid');

        return view('evacuation.addinfo')
        ->with('mcdrrmo', $mcdrrmo)
        ->with('tira', $tira)
        ->with('kuhadonasyon', $kuhadonasyon)
        ->with('getall', $getall)
        ->with('getfoods', $getfoods)
        ->with('getclothes', $getclothes)
        ->with('getmedicine', $getmedicine)
        ->with('pasa', $pasa)
        ->with('foodate', $foodate)
        ->with('foods', $foods)
        ->with('clothesdate', $clothesdate)
        ->with('clothes', $clothes)
        ->with('medicinedate', $medicinedate)
        ->with('medicine', $medicine)
        ->with('allneedate', $allneedate)
        ->with('allneed', $allneed)
        ->with('reliefs', $reliefs)
        ->with('goods', $goods);
  
    }
   
    public function sendgift(Request $request)
    {

        $id = $request->get('id');
        $namedonator = $request->get('namedonator');
        $reliefid = $request->get('reliefid');
        $descigood = $request->get('descigood');
        $dategive = $request->get('dategive');
        $dateyear = $request->get('dateyear');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 


        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);


                $ins = DB::insert('INSERT INTO receivedmc(id, namedonator, reliefid, descigood, dategive, dateyear, images)
                VALUE(?,?,?,?,?,?,?)',[$id, $namedonator, $reliefid, $descigood, $dategive, $dateyear, '/images/'. $avatarname]);


                return redirect('/add')->with('success', 'Inserted Successfully');
        }


            

       

    }

}
