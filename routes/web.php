<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/releasegoods', 'ReportController@pasagoods')->name('tangina.goods');
Route::get('/','EvacuationController@getevacuationmap'); //WElcome Blade
//Route::get('/','EvacuationController@evacuationmap');
 
Route::post('/regi','CrudController@regist');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/itstaff', 'HomeController@itstaff')->name('staff');



Route::get('/show', 'TextController@show');
Route::get('/phoneregister', 'TextController@storePhoneNumber');
Route::post('/custom', 'TextController@sendCustomMessage');


//Route::get('/anne', 'TextController@maga');
Route::get('/blog', 'TextController@blog');

//CRUD
Route::post('/road','CrudController@store');
Route::post('/addinfo','CrudController@insertaccdetails');
Route::get('/details','CrudController@accident');
Route::get('accident/{roadid}','CrudController@accdetails');
Route::get('/sample','ReportController@sample');
Route::get('/user','CrudController@getuser');
Route::get('/reportdetails','ReportController@getfull');
Route::get('/add','ReportController@reliefadd');


//AJAX CRUD
Route::post('/storeinfo','EvacuationController@centerstore')->name('ajaxstore');
Route::post('/edit','EvacuationController@centeredit')->name('editcenter');
Route::post('/edituser','CrudController@editadmin');
Route::post('/submit','CrudController@assin');
Route::post('/upda','CrudController@updateperson');


//Evacuation Center
Route::get('/infovac','EvacuationController@getevacuation');
Route::get('/status','EvacuationController@status');


Route::get('/auto','SelectController@auto');
Route::post('/update','SelectController@updatecenter');

Route::post('/latest','SelectController@addper');
Route::get('reliefd/{centerid}','SelectController@relief')->name('relief.dashboard');
Route::post('/get','SelectController@getback');
Route::post('/reliefdash','SelectController@reliefup');
Route::post('/reliedonate','SelectController@addonate');

Route::get('/debug','SelectController@debug');

Route::post('/phonechecker','CrudController@check')->name('phone_available.check');

//Accident CRUD 
Route::post('/getform','AccidentController@getform');
Route::post('/medical','AccidentController@insertaccident');
Route::post('/trauma','AccidentController@insertrauma');
Route::post('/obdetails','AccidentController@obdetails');
Route::post('/others','AccidentController@othersdetails');
Route::post('/flooding','AccidentController@kuha')->name('disaster.kuha');

//Dashboard
Route::post('dashboard','SelectController@selectcenter');

Route::get('/disaster','DisasterController@getdisaster');
Route::post('/insert','DisasterController@insrtdisaster')->name('insert.disaster');


Route::post('/reliefgoods','ReportController@chartbar');

Route::post('/tails','DisasterController@floodetails');

Route::get('capacity/chart','EvacuationController@chart');

Route::get('year/disaster','EvacuationController@anotherchart');
Route::get('kuha/details','EvacuationController@callchart');
Route::get('casualties/dami','EvacuationController@disaster');
Route::get('full/evacuation','EvacuationController@full');
Route::get('half/evacuation','EvacuationController@halffull');
Route::get('/laman', 'EvacuationController@centerinfo');

Route::get('/centeradmin','AccidentController@center');

Route::post('/donations','EvacuationController@another')->name('filter.year');
Route::post('chart/number','DisasterController@anotherdisaster')->name('num.disaster');
Route::post('damge/peryear','SelectController@casualties')->name('bilang.damage');

Route::post('total/incident','SelectController@totalincident')->name('bilang.incidente');
Route::post('total/numinci','SelectController@countincident')->name('total.incidente');
Route::post('total/natural','SelectController@natural')->name('total.disaster');

Route::post('total/donate','EvacuationController@totaldonate')->name('total.donations');

Route::post('updatestatus/{centerid}','SelectController@updatestatus');
Route::post('updatecenter/{centerid}','SelectController@updatecen');
Route::get('dashboardfresh/{centerid}','SelectController@refresh')->name('refresh.dashboard');

Route::post('dashboard/back','SelectController@upminus');

Route::post('receivedona','ReliefController@reliefupdate');
Route::post('excessup','ReliefController@excessupdate');

Route::post('receivedonate','ReportController@sendgift');

Route::get('information','ReliefController@getinfo');

Route::get('details/{centerid}','CheckController@seedetails');
Route::get('uprespo/{reqid}','CheckController@respondup');

Route::get('inputdisas','DisasterController@inputdisaster');
Route::post('/insertdisast','DisasterController@insdisast');

Route::get('/evacu','EvacuationController@evacuees');
