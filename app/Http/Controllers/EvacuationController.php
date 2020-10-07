<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\evacuation;
use Redirect,Response;

class EvacuationController extends Controller
{
    public function getevacuation()
    {
        $disas = DB::select('SELECT disasterid, disastertype FROM disasters');
        $barang = DB::select('SELECT brgyid, brgyname, iconpic FROM barangays');
        $evacuations = DB::select('SELECT centerid, disasterid, centername, centeraddress, latitude, longitude, info, capacity, brgyid FROM evacuations');
        //print_r($results);
        return view('crud.centertable')
        ->with('barang',$barang)
        ->with('disas', $disas)
        ->with('evacuations', $evacuations);
    }

    public function centerstore(Request $request)
    {
        $brgyid= $request->get('brgyid');
        $disasterid= $request->get('disasterid');
        $centername= $request->get('centername');
        $centeraddress= $request->get('centeraddress');
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $info = $request->get('info');
        $capacity = $request->get('capacity');

        $center = DB::insert('insert into evacuations(brgyid, disasterid, centername, centeraddress,
        latitude, longitude, info, capacity) value(?, ?, ?, ?, ?, ?, ?, ?)', [$brgyid, $disasterid, $centername, $centeraddress,
        $latitude, $longitude, $info, $capacity]);
        if($center)  {
            return redirect('/infovac')->with('success', 'Inserted Successfully');
        } else {
            return redirect('/infovac')->with('error', 'Something is Wrong Contact your Administrator');
        }

    }

    public function centeredit(Request $request)
    {
        $centerid = $request->get('centerid');
        $brgyid= $request->get('brgyid');
        $disasterid= $request->get('disasterid');
        $centername= $request->get('centername');
        $centeraddress= $request->get('centeraddress');
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $info = $request->get('info');
        $capacity = $request->get('capacity');

        $centers = DB::update('UPDATE evacuations SET brgyid=?, disasterid=?, centername=?, centeraddress=?, latitude=?, longitude=?,
        info=?, capacity=? WHERE centerid=?', [$brgyid, $disasterid, $centername, $centeraddress, $latitude, $longitude, $info, $capacity, $centerid]);
        
        if($centers)  {
            return redirect('/infovac')->with('success', 'Updated Successfully');
        } else {
            return redirect('/infovac')->with('danger', 'Something is Wrong');
        }
    }



    public function reliefmap() 
    {
    
      $result = DB::select('SELECT reliefcategory,iconpic FROM reliefs ');
      $ibon = DB::select('SELECT evacuation.brgyid, evacuation.centername, evacuation.centeraddress, evacuation.latitude, evacuation.longitude, 
            reliefs.reliefcategory, reliefs.iconpic, reliefmap.reliefid FROM evacuation JOIN reliefmap ON evacuation.centerid = reliefmap.centerid 
            JOIN reliefs ON reliefs.reliefid = reliefmap.reliefid');
      $latitude  = 14.3939;
      $longitude =  121.0412;
        
       // print_r($ibon);
        // print_r($aso);
         return view('maps.evacuation')
         ->with('latitude', $latitude)
         ->with('longitude', $longitude)
         ->with('result', $result)
         ->with('ibon', $ibon);
       
    }

    public function getevacuationmap()
    {
        //Code For Map
         $results = DB::select('SELECT brgyname,iconpic FROM barangays ');
         $ibon = DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
         evacuations.latitude, evacuations.longitude, barangays.iconpic, evacuationstatus.numberofper, evacuationstatus.contactperson, evacuationstatus.phonenumber,
         evacuationstatus.timeto, evacuationstatus.timefrom, evacuationstatus.dateadds, TIME_FORMAT(evacuationstatus.timeupdate, "%I:%i %p") as timedi
        FROM evacuationstatus JOIN evacuations ON evacuationstatus.centerid = evacuations.centerid JOIN barangays ON evacuations.brgyid = barangays.brgyid ');
         
        
         $gana =  DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, barangays.iconpic, count(evacuees.pwd) as sakit, count(evacuees.pregnant) as preggy, count(evacuees.senior) as tanda,
        count(evacuees.medical) as galing
       FROM evacuationstatus JOIN evacuations ON evacuationstatus.centerid = evacuations.centerid JOIN barangays ON evacuations.brgyid = barangays.brgyid
       JOIN evacuees ON evacuations.centerid = evacuees.centerid Group by(evacuees.centerid)');
        //Code For Fire Map Only
        
        $flood =  DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, barangays.iconpic FROM evacuations JOIN barangays ON evacuations.brgyid = barangays.brgyid WHERE evacuations.disasterid = 1');

        $fire =   DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, barangays.iconpic FROM evacuations JOIN barangays ON evacuations.brgyid = barangays.brgyid WHERE evacuations.disasterid = 2');


        $earthquake =   DB::select('SELECT evacuations.brgyid, evacuations.centername, evacuations.centeraddress, evacuations.info, evacuations.capacity, 
        evacuations.latitude, evacuations.longitude, barangays.iconpic FROM evacuations JOIN barangays ON evacuations.brgyid = barangays.brgyid WHERE evacuations.disasterid = 3');
        

          //Code For Relief Map
          $reli = DB::select('SELECT reliefcategory,iconpic FROM reliefs ');
          $relimap = DB::select('SELECT evacuations.centerid, evacuations.brgyid, evacuations.centername, evacuations.centeraddress,  evacuations.capacity, evacuations.latitude, evacuations.longitude, 
         reliefs.reliefcategory, reliefs.iconpic, reliefs.reliefid, reliefmaptable.reliefrequest, reliefmaptable.persontocon, reliefmaptable.phonenumber,
         reliefmaptable.timefrom, reliefmaptable.timeto, reliefmaptable.lastdate, TIME_FORMAT(reliefmaptable.lastupdate, "%I:%i %p") as timedi FROM evacuations JOIN reliefmaptable ON evacuations.centerid = reliefmaptable.centerid 
          JOIN reliefs ON reliefs.reliefid = reliefmaptable.reliefid');

         $latitude  = 14.3939;
         $longitude =  121.0412;
        
        /*
          ->with('flood', $flood)
         ->with('fire', $fire)
         ->with('earthquake', $earthquake)
         */
        // print_r($aso);
    
         return view('welcome')
         ->with('latitude', $latitude)
         ->with('longitude', $longitude)
         ->with('flood', $flood)
         ->with('fire', $fire)
         ->with('earthquake', $earthquake)
         ->with('reli',$reli)
         ->with('relimap',$relimap)
         ->with('results', $results)
         ->with('gana',$gana)
         ->with('ibon', $ibon);
         
     
       // print_r($ibon);
    }


    public function status()
    {
        $status = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, evacuationstatus.active  
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active = "not active"');

        return view('evacuation.status')
        ->with('status', $status);
    }

    public function activecenter()
    {
        $active = DB::select('SELECT COUNT(centerid) AS "activecenter" FROM evacuationstatus JOIN evacuations ON
        evacuationstatus.centerid = evacuations.centerid WHERE evacuationstatus.active = "active" ');

        return view('evacuation.status');
    }

    public function chart()
    {
        //$chart = DB::select('SELECT callyear FROM disastercall');
        $chart = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, evacuations.capacity
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active"');

            return response()->json($chart);
        
    }

    public function anotherchart()
    {
        $another = DB::select('SELECT disastercall.callyear, disasters.disastertype, COUNT(disastercall.disasterid) AS "center" FROM disastercall JOIN disasters ON
        disastercall.disasterid = disasters.disasterid GROUP BY disastercall.disid');

          return response()->json($another);
    } 

    public function callchart()
    {
            $call = DB::select('SELECT DISTINCT(accidentcategorys.incident) as party, COUNT(accidentdetails.incidentid) as road FROM accidentdetails JOIN accidentcategorys
            ON accidentcategorys.incidentid = accidentdetails.incidentid GROUP BY accidentdetails.incidentid');

            return response()->json($call);
    }


    public function disaster()
    {
        $nine = DB::select('SELECT DISTINCT(disasters.disastertype) as wow,  SUM(casualties.estamount) as ediwow FROM disasters JOIN casualties
        ON casualties.disasterid = disasters.disasterid GROUP BY casualties.disasterid');

        return response()->json($nine);
    }

    public function full()
    {
        $full = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper as panget FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuations.capacity < evacuationstatus.numberofper');

        return response()->json($full);

    }

    public function halffull()
    {
        $half = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity > evacuationstatus.numberofper 
        UNION
        SELECT evacuations.centername, (evacuationstatus.numberofper) as full FROM evacuations JOIN evacuationstatus ON
        evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity < evacuationstatus.numberofper');

        return response()->json($half);

    }

    public function centerinfo()
    {
        $laman = DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, (evacuations.capacity - evacuationstatus.numberofper) as natira 
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity > evacuationstatus.numberofper');

        $sobra =  DB::select('SELECT evacuations.centername, evacuationstatus.numberofper, evacuations.capacity, (evacuationstatus.numberofper - evacuations.capacity) as sobra 
        FROM evacuations JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" AND evacuations.capacity < evacuationstatus.numberofper');
        
        
        print_r($sobra);
    }

    public function another(Request $request)
    {
        if($request->input('year'))
        {
     
            $donation = $this->fetch_donations($request->input('year'));
            
                  foreach($donation->toArray() as $row)
                {
       
                    $output[] = array(
                        'nakuha'  => $row->nakuha,
                        'donasyon' => floatval($row->donasyon)
                     );
                }
     
           echo json_encode($output);
            
        }



    }

   function fetch_donations($year)
    {
      $data =  DB::table('reliefdonations')
     ->join('reliefs','reliefdonations.reliefid','=','reliefs.reliefid')
     ->select(DB::raw('Distinct(reliefs.reliefcategory) as nakuha'), DB::raw('Count(reliefdonations.reliefid) as donasyon'))
     ->where('reliefdonations.reyear','=', $year)
     ->groupBy('reliefdonations.reliefid')
     ->get();

      return $data;
      
    }

    public function totaldonate(Request $request)
    {
        if($request->input('year'))
        {
     
            $donation = $this->fetch_count($request->input('year'));
            
                  foreach($donation->toArray() as $row)
                {
       
                    $output = $row->totaldonation;
                        
                }
     
           echo json_encode($output);
            
        }
    }

    function fetch_count($year)
    {
        $data = DB::table('reliefdonations')
        ->select(DB::raw('Count(reliefid) as totaldonation'))
        ->where('reyear','=',$year)
        ->get();

        return $data;
    }
    
    
    
    public function evacuees()
    {

        $evacuees =  DB::select('SELECT centerid,name,address,age,phone,gender,pwd,pregnant,senior,medical,specify FROM evacuees');
  
        return view('staff.evacuees')
        ->with('evacuees', $evacuees);
    }

  
}
