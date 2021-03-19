<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Models\User;
use App\Models\money;
use App\Models\massage;
use Auth;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function mainProfile()
    {
    	$user=User::where('id', Auth::id())->first();
    	
    	return view('UserProfile.mainProfile',compact('user'));
    }


    public function sendMoney()
    {

        $date= new Carbon();
        $date->timezone('US/Central');
           


        $date3 = $date->year;
         $date2 = $date->month;
          $date1 = $date->day;
    // return response()->json($date3);
        //echo $date->month;
       // echo $date->day;
        //echo $date;
           //echo $date->date;
        //$date->today();
        //echo $date;
    	return view('UserProfile.sendMoney',compact('date1','date2','date3'));
    }

    
    public function saveSendMoney(Request $request)
    {

        $money= new money;
        
        $money->payment_number=$request->payment_number;
        $money->payment_method=$request->payment_method;
        $money->amount=$request->amount;

         $money->day=$request->date1;
        $money->month=$request->date2;
        $money->year=$request->date3;

        $money->user_id=Auth::id();
        $money->save();
       
        //$moneyData=money::Where('user_id',Auth::id())->get();

        //return view('UserProfile.paymentStatus',compact('moneyData'));
        
        $user=User::where('id', Auth::id())->first();
        
        return redirect()->route('profile',compact('user'));

    }

    public function paymentStatus()
    {
        $moneyData=money::Where('user_id',Auth::id())->get();

        return view('UserProfile.paymentStatus',compact('moneyData'));
        
    }

    public function massage()
    {
      return view('UserProfile.massage');
    }

    public function saveMassage(Request $request)
    {
       $massage = new massage;
        $massage->subject=$request->subject;
        $massage->massage=$request->massage;
        $massage->user_id=Auth::id();
        $massage->user_name=Auth::user()->name;
        $massage->save();

         return redirect()->route('profile');
    }
    

    public function changeProfile()
    {
        $user=User::Where('id',Auth::id())->first();
       // return response()->json($user->name);
        
         return view('UserProfile.varificationProfilechange',compact('user'));
    }
    
    public function sendVerification(Request $request)

    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
      
        $user->verification_code = sha1(time());

        MailController::updateProfile($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Verification link sent in your email account.please check your email to update profile'));
    }


      public function updateProfile(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();

        $users=User::Where('id',Auth::id())->first(); 
          return view('UserProfile.updateProfile',compact('users'));
    }

    public function saveUpdateProfile(Request $request , $id)
    {
             
        $user=User::Where('id',Auth::id())->first();    

        //return response()->json($request);
        $user=new User;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->verification_code = sha1(time());
        $user->save();
        return redirect()->route('profile')->with(session()->flash('alert-success', 'Your profile is successfully updated'));
    }

    public function blockMsg()
    {
        return view('Msg.blockMsg');
    }

}
