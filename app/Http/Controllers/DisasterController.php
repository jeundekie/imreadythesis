<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisasterController extends Controller
{
    public function getdisaster()
    {
        $disasters = DB::select('SELECT disid,disasterid, callername, callernum, dislocation, team, coordinated, whocoor,
        calldate, calltime, tag FROM disastercall WHERE remark = "no"');
        return view('crud.disaster')
        ->with('disasters', $disasters);
    }

    public function getselect(Request $request)
    {
        $disaster = $request->get('disaster');
        $disid = $request->get('disid');
         
        $sells = DB::select('SELECT disid, disasterid, dislocation, team, calldate FROM disastercall WHERE disid=?',[$disid]);
         if ($disaster == 1){
               
                return view('crud.flood')
                ->with('sells', $sells);
         }else if($disaster == 2){
            
            return view('crud.fire')
            ->with('sells', $sells);
         }
    }

    public function insrtdisaster(Request $request)
    {
        $disasterid = $request->get('disasterid');
        $id = $request->get('id');
        $callername = $request->get('callername');
        $callernum = $request->get('callernum');
        $dislocation = $request->get('dislocation');
        $team = $request->get('team');
        $coordinated = $request->get('coordinated');
        $whocoor = $request->get('whocoor');
        $calldate = $request->get('calldate');
        $calltime = $request->get('calltime');
        $callyear = $request->get('callyear');
        $tag = $request->get('tag');
        $remark = $request->get('remark');

        $acc = DB::insert('INSERT INTO disastercall(disasterid, id, callername, callernum, dislocation, team, coordinated, whocoor, calldate, calltime,
        callyear, tag, remark) value(?,?,?,?,?,?,?,?,?,?,?,?,?)',[$disasterid, $id, $callername, $callernum, $dislocation, $team, $coordinated, 
        $whocoor, $calldate, $calltime, $callyear, $tag, $remark]);

        return redirect('/disaster')->with('success', 'Inserted Successfully');

    }

    public function floodetails(Request $request)
    {

        $disid = $request->get('disid');
        $id = $request->get('id');
        $assesment = $request->get('assesment');
        $remarks = $request->get('remarks');
        $this->validate($request, [
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 


        $numinjured = $request->get('numinjured');
        $numdeaths = $request->get('numdeaths');
        $estdamage = $request->get('estdamage');
        $dmgdescrip = $request->get('dmgdescrip');
        $casual = $request->get('casual');

        if(request()->has('images'))
        {
           
                $avataruploaded = request()->file('images');
                $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                $avatarpath = public_path('/images/');
                $avataruploaded->move($avatarpath, $avatarname);

                if ($casual == 'Yes') {

                        $insflood = DB::insert('INSERT INTO floodetails(disid, id, assesment, remarks, images) value(?,?,?,?,?)',[ 
                        $disid, $id, $assesment, $remarks, '/images/'. $avatarname]);

                        $ins = DB::insert('INSERT INTO disastercasualties(disid, numinjured, numdeaths, estdamage, dmgdescrip) value(?,?,?,?,?)',[$disid, $numinjured, $numdeaths, $estdamage, $dmgdescrip]);

                        $up = DB::update('UPDATE disastercall SET remark = "yes" WHERE disid=?',[$disid]);

                        return view('details.viewing')
                        ->with('success','Inserted Successfully');

                }else{

                         $insflood = DB::insert('INSERT INTO floodetails(disid, id, assesment, remarks, images) value(?,?,?,?,?)',[ 
                        $disid, $id, $assesment, $remarks, '/images/'. $avatarname]);

                        $up = DB::update('UPDATE disastercall SET remark = "yes" WHERE disid=?',[$disid]);

                        
                        return view('details.viewing')
                        ->with('success','Inserted Successfully');
                }


        }


        
    }

    public function reed()
    {
        return view('details.viewing');
    }
    public function firedetails(Request $request)
    {
        $disid = $request->get('disid');
        $firelevel = $request->get('firelevel');
        $incidentaddress = $request->get('incidentaddress');
        $firetype = $request->get('firetype');
        $reason = $request->get('reason');
        $damage = $request->get('damage');
        $estincidentime = $request->get('estincidentime');
        $images = $request->get('images');
        
    }

    public function casual(Request $request)
    {
        $disid = $request->get('disid');
        $numinjured = $request->get('numinjured');
        $numdeaths = $request->get('numdeaths');
        $estdamage = $request->get('estdamage');
        $dmgdescrip = $request->get('dmgdescrip');
   

    }

    public function anotherdisaster(Request $request)
    {
        if($request->input('recordyear'))
        {
     
            $numdisaster = $this->fetch_disaster($request->input('recordyear'));
        
                  foreach($numdisaster->toArray() as $row)
                {
       
                    $output[] = array(
                        'kalamidad'  => $row->kalamidad,
                        'dami' => floatval($row->dami)
                     );
                }
     
           echo json_encode($output);
            
        }



    }

    function fetch_disaster($recordyear)
    {
      $data =  DB::table('recordisaster')
     ->join('disasters','recordisaster.disasterid','=','disasters.disasterid')
     ->select(DB::raw('Distinct(disasters.disastertype) as kalamidad'), DB::raw('Count(recordisaster.disasterid) as dami'))
     ->where('recordisaster.recordyear','=', $recordyear)
     ->groupBy('recordisaster.disasterid')
     ->get();

   
      return $data;
      
    }


    public function inputdisaster()
    {
        $results = DB::select('SELECT disasters.disastertype, recordisaster.descriptions, recordisaster.recordate, recordisaster.recordyear,
        recordisaster.remarks FROM recordisaster JOIN disasters ON recordisaster.disasterid = disasters.disasterid');

            return view('admin.bigayrelief')
            ->with('results', $results);
    }

    public function insdisast(Request $request)
    {
        $disasterid = $request->get('disasterid');
        $id = $request->get('id');
        $descriptions = $request->get('descriptions');
        $recordate = $request->get('recordate');
        $recordyear = $request->get('recordyear');
        $remarks = $request->get('remarks');


        $pasok = DB::insert('INSERT INTO recordisaster(disasterid, id, descriptions, recordate, recordyear, remarks)
        VALUE(?,?,?,?,?,?)',[$disasterid, $id,  $descriptions, $recordate, $recordyear, $remarks]);

        return redirect('/inputdisas')->with('success', 'Inserted Successfully');

    }
}
