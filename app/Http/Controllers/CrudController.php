<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class CrudController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->get('id');
        $callfrom = $request->get('callfrom');
        $phonum = $request->get('phonum');
        $victimgender = $request->get('victimgender');
        $incilocation = $request->get('incilocation');
        $team = $request->get('team');
        $relation = $request->get('relation');
        $roadate = $request->get('roadate');
        $yearda = $request->get('yearda');
        $calltime = $request->get('calltime');
        $tag = $request->get('tag');
        $remarks = $request->get('remarks');
        $finished = $request->get('finished');
      

        $road = DB::insert('INSERT INTO roadaccidents(id, callfrom, phonum, victimgender, incilocation, team, relation, roadate,
        yearda, calltime, tag, remarks, finished) value(?,?,?,?,?,?,?,?,?,?,?,?,?)',[$id, $callfrom, $phonum, $victimgender,$incilocation, $team, $relation, $roadate, $yearda, $calltime, $tag, $remarks, $finished]);
        
        if($road)  {
            return redirect('/details')->with('success', 'Inserted Successfully');
        } else {
            return redirect('/details')->with('error', 'Something is Wrong Please Contact Your I.T');
        }
    
    }

    public function accident()
    {
    
        $roads = DB::select('SELECT roadaccidents.roadid, roadaccidents.callfrom, roadaccidents.phonum, roadaccidents.incilocation, roadaccidents.victimgender, roadaccidents.team, 
        roadaccidents.relation, roadaccidents.roadate, roadaccidents.tag, roadaccidents.remarks, users.name,
        TIME_FORMAT(roadaccidents.calltime, "%I:%i %p") as timedi FROM roadaccidents JOIN users ON users.id = roadaccidents.id WHERE roadaccidents.finished = "no"');
       
        // print_r($roads);
         return view('details.roadacc')
        ->with('roads', $roads);

    }

    public function accdetails(Request $request, $id)
    {

        $results = DB::select('SELECT roadaccidents.roadid, roadaccidents.incilocation, roadaccidents.victimgender, roadaccidents.team, 
        roadaccidents.roadate, roadaccidents.remarks, TIME_FORMAT(roadaccidents.calltime, "%I:%i %p") as timedi FROM
        roadaccidents WHERE roadaccidents.roadid=?', [$id]);

        //print_r($results);
        return view('details.accident')
        ->with('roadid', $id)
        ->with('results', $results);

    }

    public function insertaccdetails(Request $request)
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

        
    }

    public function regist(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'description' => ['required', 'string', 'max:255'],
            'userphone' => ['required', 'string', 'max:11'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //$user = User::create(request(['name', 'username', 'email', 'description', 'password']));
        $user = User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'description' => $request['description'],
            'userphone' => $request['userphone'],
            'password' => Hash::make($request['password']),
        ]);
        if($user)  {
            return redirect('/home')->with('success', 'Inserted Successfully');
        } else {
            return redirect('/home')->with('error', 'Please Process Again');
        }
       
        

    }
     
   
    public function getuser()
    {

    
        $admins = DB::select('SELECT users.id, users.name, users.username, users.email, users.description,  
        users.userphone FROM users ');

        $sell = DB::select('SELECT centerid, centername FROM evacuations');

        $soils  = DB::select('SELECT centerid, centername FROM evacuations');

        $evacu = DB::select('SELECT users.id, evacuationstatus.contactperson, evacuationstatus.phonenumber, evacuations.centername,
        evacuationstatus.timeto, evacuationstatus.timefrom  FROM evacuationstatus JOIN users ON evacuationstatus.contactperson
        = Users.name  JOIN evacuations ON evacuationstatus.centerid = evacuations.centerid WHERE evacuationstatus.active ="active"');
        
    
        return view('crud.user')
        ->with('admins', $admins)
        ->with('sell', $sell)
        ->with('evacu', $evacu)
        ->with('soils', $soils); 
        

    }
    

    public function editadmin(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $username = $request->get('username');
        $email = $request->get('email');
        $description = $request->get('description');
        $userphone = $request->get('userphone');
        

        $admi = DB::update('UPDATE users SET name=?, username=?, email=?, description=?,
        userphone=? WHERE id=?', [ $name, $username, $email, $description, $userphone, $id]);
        
        if($admi)  {
            return redirect('/user')->with('success', 'Updated Successfully');
        } else {
            return redirect('/user')->with('danger', 'Something is Wrong');
        }
    }

    public function assin(Request $request)
    {
        $centerid = $request->get('centerid');
        $contactperson = $request->get('contactperson');
        $phonenumber = $request->get('phonenumber');
        $forelief = $request->get('forelief');
        $forcenter = $request->get('forcenter');
        $timefrom = $request->get('timefrom');
        $timeto = $request->get('timeto');
      
       
 
        if ($forelief == 'yes' && $forcenter == 'yes')
        {
            $updatenum = DB::update('UPDATE reliefmaptable SET persontocon = ?, phonenumber =?, timefrom =?, timeto=?
            WHERE centerid =?', [$contactperson, $phonenumber, $timefrom, $timeto, $centerid]);
               return redirect('/user')->with('success', 'Inserted Successfully');

               $upcen = DB::update('UPDATE evacuationstatus SET contactperson = ?, phonenumber =?, timeto =?, timefrom=?,
            active = "active" WHERE centerid =?', [$contactperson, $phonenumber, $timeto, $timefrom, $centerid]);
                   return redirect('/user')->with('success', 'Inserted Successfully');

        }else if($forcenter == 'yes' &&  $forelief== 'no')
        {
            $upcen = DB::update('UPDATE evacuationstatus SET contactperson = ?, phonenumber =?, timeto =?, timefrom=?,
            active = "active" WHERE centerid =?', [$contactperson, $phonenumber, $timeto, $timefrom, $centerid]);
                   return redirect('/user')->with('success', 'Inserted Successfully');
       }else if($forelief == 'yes' && $forcenter == 'no')
       {
                 $updatenum = DB::update('UPDATE reliefmaptable SET persontocon = ?, phonenumber =?, timefrom =?, timeto=?
                WHERE centerid =?', [$contactperson, $phonenumber, $timefrom, $timeto, $centerid]);
                return redirect('/user')->with('success', 'Inserted Successfully');

       }


    }

    public function updateperson(Request $request)
    {
        $contactid = $request->get('contactid');
        $centerid = $request->get('centerid');
        $forelief = $request->get('forelief');
        $forcenter = $request->get('forcenter');
        $timefrom = $request->get('timefrom');
        $timeto = $request->get('timeto');
        

        $con = DB::update('UPDATE contacts SET centerid=?, forelief=?, forcenter=?, timefrom=?,
        timeto=? WHERE contactid=?', [ $centerid, $forelief, $forcenter, $timefrom, $timeto, $contactid]);
        
        if($con)  {
            return redirect('/user')->with('success', 'Updated Successfully');
        } else {
            return redirect('/user')->with('danger', 'Something is Wrong');
        }

    }

    public function check(Request $request)
    {
          if($request->get('phonum'))
          {
            $phonum = $request->get('phonum');
            $data = DB::table("roadaccidents")
            ->where('phonum','=', $phonum)
            ->where('tag','=','false')
            ->count();
              if($data > 0)
             {
                echo 'not check';
             }
                else
             {
                echo 'check';
             }
          }


   }

   public function kuhacenter()
   {
       $evacu = DB::select('SELECT users.id, evacuationstatus.contactperson, evacuationstatus.phonenumber,
       evacuationstatus.timeto, evacuationstatus.timefrom  FROM evacuationstatus JOIN users ON evacuationstatus.contactperson
       = Users.name WHERE evacuationstatus.active ="active"');

       $reliefcu = DB::select('SELECT users.id, reliefmaptable.persontocon, reliefmaptable.phonenumber, reliefmaptable.timefrom,
       reliefmaptable.timeto FROM users JOIN reliefmaptable ON users.name = reliefmaptable.persontocon WHERE evacuationstatus.active ="active"');


       
   }

}
