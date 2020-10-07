<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;


  

class LoginController extends Controller
{
  
    use AuthenticatesUsers;
    
    //protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->description == "Super Admin") 
            {
                return redirect('/home')->with('success', 'Login Successfully');
            }
            else if (auth()->user()->description == "IT Staff") 
            {
                return redirect('/home')->with('success', 'Login Successfully');
            }
            else if (auth()->user()->description == "Evacuation Staff")
            {
                return redirect('/itstaff')->with('success', 'Login Successfully');
            }
        }

        else
        {
            return redirect()->route('login')->with('error','Invalid! Please try Again');
        }
       
          
    }
}