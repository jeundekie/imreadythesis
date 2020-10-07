<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class AccidentController extends Controller
{
    public function getform(Request $request)
    {
        $roadid = $request->get('roadid');
        $patientid = $request->get('patientid');
        $incidentid = $request->get('incidentid');

        $rody = DB::select('SELECT roadaccidents.roadid, roadaccidents.incilocation, roadaccidents.victimgender, roadaccidents.team, 
        roadaccidents.roadate, roadaccidents.remarks, TIME_FORMAT(roadaccidents.calltime, "%I:%i %p") as timedi FROM
        roadaccidents WHERE roadaccidents.roadid=?', [$roadid]);

        if ($patientid == 1 && $incidentid == 1)
        {
            return view('details.medical')
            ->with('rody', $rody);
        }else if ($patientid == 2 && $incidentid == 2)
        {
            return view('details.trauma')
            ->with('rody', $rody);
        }else if ($patientid == 3 && $incidentid == 3)
        {
            return view('details.ob')
            ->with('rody', $rody);
        }else if ($incidentid == 4 && $patientid == 2)
        {
            return view('details.trauma')
            ->with('rody', $rody);
        }else
        {
            return view('details.others')
            ->with('rody', $rody);
        }
        
    }

     // Medical 
    public function insertaccident(Request $request)
    {
        $roadid = $request->get('roadid');
        $id = $request->get('id');
        $patientid = $request->get('patientid');
        $incidentid = $request->get('incidentid');
        $victimname = $request->get('victimname');
        $vicaddress = $request->get('vicaddress');
        $vicage = $request->get('vicage');
        $vicnumber = $request->get('vicnumber');
        $timeincident = $request->get('timeincident');
        $timecleared = $request->get('timecleared');
        $typerun = $request->get('typerun');

        $lesscon = $request->get('lesscon');
        $levelcon = $request->get('levelcon');
        $medhis = $request->get('medhis');
        $illness = $request->get('illness');
        $assesment = $request->get('assesment');
        $transporto = $request->get('transporto');
        $whereto = $request->get('whereto');
        $signed = $request->get('signed');
        $alive = $request->get('alive');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

          //Death Part
        $shockgivetime = $request->get('shockgivetime');
        $numshock = $request->get('numshock');
        $recogdeath = $request->get('recogdeath');
        $timeofdeath = $request->get('timeofdeath');
        $deathdate = $request->get('deathdate');

        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);

        if ($alive == 'Yes')
        {
            $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
            vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
            [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
        
            $insrtmedical = DB::insert('INSERT INTO medical( roadid, lesscon, levelcon, medhis, illness, assesment, transporto, 
            whereto, signed, alive, images) value(?,?,?,?,?,?,?,?,?,?,?)',
            [$roadid, $lesscon, $levelcon, $medhis, $illness, $assesment, $transporto, $whereto, $signed, $alive, '/images/'. $avatarname]);
            
            $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

            return redirect('/information')->with('success', 'Inserted Successfully');


        }else if($alive == 'No')
        {
            $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
            vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
            [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
        
            $insrtmedical = DB::insert('INSERT INTO medical( roadid, lesscon, levelcon, medhis, illness, assesment, transporto, 
            whereto, signed, alive, images) value(?,?,?,?,?,?,?,?,?,?,?)',
            [$roadid, $lesscon, $levelcon, $medhis, $illness, $assesment, $transporto, $whereto, $signed, $alive, '/images/'. $avatarname]);
    
            $insrtdeath  = DB::insert('INSERT INTO deathdetails( roadid, shockgivetime, numshock, recogdeath, timeofdeath,  
            deathdate) value(?,?,?,?,?,?)',
            [$roadid, $shockgivetime, $numshock, $recogdeath, $timeofdeath, $deathdate]);

            $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

            return redirect('/information')->with('success', 'Inserted Successfully');
        }
        }

    }

     //Trauma
    public function insertrauma(Request $request)
    {   
        $shit = $request->get('shit');

        $roadid = $request->get('roadid');
        $id = $request->get('id');
        $patientid = $request->get('patientid');
        $incidentid = $request->get('incidentid');
        $victimname = $request->get('victimname');
        $vicaddress = $request->get('vicaddress');
        $vicage = $request->get('vicage');
        $vicnumber = $request->get('vicnumber');
        $timeincident = $request->get('timeincident');
        $timecleared = $request->get('timecleared');
        $typerun = $request->get('typerun');

        //Insert in Trauma Table
        $lesscon = $request->get('lesscon'); 
        $levelcon = $request->get('levelcon');
        $injuries = $request->get('injuries');
        $tbsa = $request->get('tbsa');
        $assesment = $request->get('assesment');
        $casualties = $request->get('casualties');
        $estcasual = $request->get('estcasual');
        $transporto = $request->get('transporto');
        $whereto = $request->get('whereto');
        $signed = $request->get('signed');
        $notes = $request->get('notes');
        $alive = $request->get('alive');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        //Collision Part
        $vehicleinvo = $request->get('vehicleinvo');
        $platenum = $request->get('platenum');

        //Death Part
        $shockgivetime = $request->get('shockgivetime');
        $numshock = $request->get('numshock');
        $recogdeath = $request->get('recogdeath');
        $timeofdeath = $request->get('timeofdeath');
        $deathdate = $request->get('deathdate');

        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);

            if($alive == 'Yes' && $shit == 'No')
            {
                $insrtrauma = DB::insert('INSERT INTO trauma( roadid, lesscon, levelcon, injuries, tbsa, assesment, casualties, estcasual,
                transporto, whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $injuries, $tbsa, $assesment, $casualties, $estcasual, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
            
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
            
                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);


                return redirect('/information')->with('success', 'Inserted Successfully');
               

            }else if($alive == 'Yes' && $shit == 'Yes')
            {
                $insrtrauma = DB::insert('INSERT INTO trauma( roadid, lesscon, levelcon, injuries, tbsa, assesment, casualties, estcasual,
                transporto, whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $injuries, $tbsa, $assesment, $casualties, $estcasual, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
            
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
            
                $insrtcolli = DB::insert('INSERT INTO collisiondetails( roadid, vehicleinvo, platenum) value(?,?,?)',
                [$roadid, $vehicleinvo, $platenum]);

                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return redirect('/information')->with('success', 'Inserted Successfully');

            }else if($alive == 'No' && $shit == 'Yes')
            {
                $insrtrauma = DB::insert('INSERT INTO trauma( roadid, lesscon, levelcon, injuries, tbsa, assesment, casualties, estcasual,
                transporto, whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $injuries, $tbsa, $assesment, $casualties, $estcasual, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
            
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
            
                $insrtcolli = DB::insert('INSERT INTO collisiondetails( roadid, vehicleinvo, platenum) value(?,?,?)',
                [$roadid, $vehicleinvo, $platenum]);

                $insrtdeath  = DB::insert('INSERT INTO deathdetails( roadid, shockgivetime, numshock, recogdeath, timeofdeath,  
                deathdate) value(?,?,?,?,?,?)',
                [$roadid, $shockgivetime, $numshock, $recogdeath, $timeofdeath, $deathdate]);

                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return redirect('/information')->with('success', 'Inserted Successfully');

            }else if($alive == 'No' && $shit == 'No')
            {
                $insrtrauma = DB::insert('INSERT INTO trauma( roadid, lesscon, levelcon, injuries, tbsa, assesment, casualties, estcasual,
                transporto, whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $injuries, $tbsa, $assesment, $casualties, $estcasual, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
            
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);

                $insrtdeath  = DB::insert('INSERT INTO deathdetails( roadid, shockgivetime, numshock, recogdeath, timeofdeath,  
                deathdate) value(?,?,?,?,?,?)',
                [$roadid, $shockgivetime, $numshock, $recogdeath, $timeofdeath, $deathdate]);

                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return redirect('/information')->with('success', 'Inserted Successfully');
            }

        }

    }

     //OB
    public function obdetails(Request $request)
    {
        $roadid = $request->get('roadid');
        $id = $request->get('id');
        $patientid = $request->get('patientid');
        $incidentid = $request->get('incidentid');
        $victimname = $request->get('victimname');
        $vicaddress = $request->get('vicaddress');
        $vicage = $request->get('vicage');
        $vicnumber = $request->get('vicnumber');
        $timeincident = $request->get('timeincident');
        $timecleared = $request->get('timecleared');
        $typerun = $request->get('typerun');

        //OB Table
        $roadid = $request->get('roadid');
        $lesscon = $request->get('lesscon'); 
        $levelcon = $request->get('levelcon');  
        $painscale = $request->get('painscale');    
        $lmp = $request->get('lmp');
        $aog = $request->get('aog');
        $edd = $request->get('edd');
        $apgarscore = $request->get('apgarscore');
        $transporto = $request->get('transporto');
        $whereto = $request->get('whereto');
        $signed = $request->get('signed');
        $notes = $request->get('notes');
        $alive = $request->get('alive');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        //Death Part
        $shockgivetime = $request->get('shockgivetime');
        $numshock = $request->get('numshock');
        $recogdeath = $request->get('recogdeath');
        $timeofdeath = $request->get('timeofdeath');
        $deathdate = $request->get('deathdate');

        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);
            
            if($alive == 'Yes')
            {
                $insrtob = DB::insert('INSERT INTO obtable( roadid, lesscon, levelcon, painscale, lmp, aog, edd, apgarscore, transporto,  
                whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $painscale, $lmp, $aog, $edd, $apgarscore, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
        
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
            
                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return redirect('/information')->with('success', 'Inserted Successfully');

            }else if($alive == 'No')
            {
                $insrtob = DB::insert('INSERT INTO obtable( roadid, lesscon, levelcon, painscale, lmp, aog, edd, apgarscore, transporto,  
                whereto, signed, notes, alive, images) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $lesscon, $levelcon, $painscale, $lmp, $aog, $edd, $apgarscore, $transporto, $whereto, $signed, $notes, $alive, '/images/'. $avatarname]);
        
                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
                
                $insrtdeath  = DB::insert('INSERT INTO deathdetails( roadid, shockgivetime, numshock, recogdeath, timeofdeath,  
                deathdate) value(?,?,?,?,?,?)',
                [$roadid, $shockgivetime, $numshock, $recogdeath, $timeofdeath, $deathdate]);
           
                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return redirect('/information')->with('success', 'Inserted Successfully');
            }

        
        }

      
    }


  
    //Others
    public function othersdetails(Request $request)
    {
        $roadid = $request->get('roadid');
        $id = $request->get('id');
        $patientid = $request->get('patientid');
        $incidentid = $request->get('incidentid');
        $victimname = $request->get('victimname');
        $vicaddress = $request->get('vicaddress');
        $vicage = $request->get('vicage');
        $vicnumber = $request->get('vicnumber');
        $timeincident = $request->get('timeincident');
        $timecleared = $request->get('timecleared');
        $typerun = $request->get('typerun');

        //Others Table
        $needed = $request->get('needed');
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

                $accident = DB::insert('INSERT INTO accidentdetails( roadid, id, patientid, incidentid, victimname, vicaddress, 
                vicage, vicnumber, timeincident, timecleared, typerun) value(?,?,?,?,?,?,?,?,?,?,?)',
                [$roadid, $id, $patientid, $incidentid, $victimname, $vicaddress, $vicage, $vicnumber, $timeincident, $timecleared, $typerun]);
        
                $insrtothers = DB::insert('INSERT INTO others(roadid, needed, remarks, images) VALUE(?,?,?,?)',[$roadid, $needed, $remarks, '/images/'. $avatarname]);
               
                $updatedone = DB::update('UPDATE roadaccidents SET finished ="yes" WHERE roadid=?', [$roadid]);

                return view('details.viewing')
                ->with('success','Inserted Successfully');

        }

    
    }   

   
    public function kuha(Request $request)
    {
        
        $disasterid = $request->get('disasterid');
        $disid = $request->get('disid');
         
        $sells = DB::select('SELECT disid, disasterid, dislocation, team, calldate FROM disastercall WHERE disid=?',[$disid]);
         if ($disasterid == 1){
               
                return view('details.floodreport')
                ->with('sells', $sells);
           }else if($disasterid == 2){
            
            return view('crud.fire')
            ->with('sells', $sells);
         }

    }

    public function center()
    {
        $results = DB::select('SELECT DISTINCT(evacuations.centername) as lugar, Count(reliefdonations.reliefid) as anony FROM reliefdonations JOIN evacuations
        ON reliefdonations.centerid = evacuations.centerid JOIN evacuationstatus ON reliefdonations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active="active"
        GROUP BY reliefdonations.centerid');
        
        $results2 = DB::select('SELECT DISTINCT(evacuations.centername) as lugarmc, Count(reliefstatus.reliefid) as galingmc FROM reliefstatus JOIN evacuations ON reliefstatus.centerid = evacuations.centerid
        JOIN evacuationstatus ON reliefstatus.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" GROUP BY reliefstatus.centerid');

        $bar = DB::select('SELECT DISTINCT(barangays.brgyname), Count(evacuationstatus.centerid) as bill FROM barangays
        JOIN evacuations ON barangays.brgyid = evacuations.brgyid JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active" Group By evacuationstatus.centerid');
        
        $total = DB::select('SELECT COUNT(evacuationstatus.centerid) as toti FROM barangays
        JOIN evacuations ON barangays.brgyid = evacuations.brgyid JOIN evacuationstatus ON evacuations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active"');

        $total2 = DB::select('SELECT Count(reliefstatus.reliefid) as reliefmc FROM reliefstatus JOIN evacuations ON reliefstatus.centerid = evacuations.centerid
        JOIN evacuationstatus ON reliefstatus.centerid = evacuationstatus.centerid WHERE evacuationstatus.active ="active"');

        $total3 =   DB::select('SELECT Count(reliefdonations.reliefid) as individ FROM reliefdonations JOIN evacuations
        ON reliefdonations.centerid = evacuations.centerid JOIN evacuationstatus ON reliefdonations.centerid = evacuationstatus.centerid WHERE evacuationstatus.active="active"');

        return view('center')
        ->with('bar', $bar)
        ->with('total', $total)
        ->with('total2', $total2)
        ->with('total3',$total3)
        ->with('results2', $results2)
        ->with('results', $results);
    }

}
