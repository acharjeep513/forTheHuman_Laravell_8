<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\money;
use Auth;
use Carbon\Carbon;
use App\Models\massage;
use App\Models\notice;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function add()
	{
		return view('admin.home');
	}

	public function blockUserAccess()
	{
		$user =User::all();
		return view('admin.blockUserAccess',compact('user'));

	}

	public function blockUserAccessId(Request $request, $id)
	{
           $users=User::findorfail($id);
           return view('admin.blockUserAccessId',compact('users'));
	}

	public function blocKUserAccessSave(Request $request ,$id)
	{
        $user=User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->verification_code = sha1(time());
        $user->is_varified = 2;
        $user->save();
        return redirect()->route('UserData');


	}

	public function unblockUserAccess(Request $request ,$id)
	{
        $users=User::findorfail($id);
        return view('admin.unblockUserAccess',compact('users'));

	}
	public function unblockUserAccessId(Request $request ,$id)
	{
        $user=User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->verification_code = sha1(time());
        $user->is_varified = 1;
        $user->save();
        return redirect()->route('UserData');

	}

	public function totalmoney()
	{
		$date= new Carbon();
		$date->timezone('US/Central');
           


        // echo $date->year;

        //echo $date->month;
        //echo $date->day;
		//echo $date;
           //echo $date->date;
		//$date->today();
		//echo $date;


		$cart=money::where('month',2)
               ->where('year',2021)
               ->get();
		$money =money::all();
		$moneyDate=money::whereDate('created_at',today())->get();
	    //return response()->json($cart);
		return view('admin.money.totalmoney',compact('money','moneyDate'));
	}




     public function ActivityAccess()
     {
     	return view('admin.activity.add');
     }



     public function addNotice()
     {
     	return view('admin.manageNotice.addNotice');

     }

     public function addNoticeSave(Request $request)
     {
     	$notice = new notice;
        $notice->notice = $request->notice;
        $notice->notice_full = $request->notice_full;
        $notice->DD = $request->DD;
        $notice->MM = $request->MM;
        $notice->YYYY = $request->YYYY;
        $notice->save();

     }

     public function adminShowNoice()
     {
     	$notice=notice::all();
     	return view('admin.manageNotice.showNotice',compact('notice'));
     }

     public function adminDeleteNotice($id)
     {
           $notice=new notice;
    $notice=notice::findorfail($id);
    $notice->delete();
    
    return redirect()->route('notice');
     }
     public function indexNotice()
     {
     	return view('admin.manageNotice.indexNotice');
     }
}
