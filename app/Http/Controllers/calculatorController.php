<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\money;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\DB;

class calculatorController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function thisYear()
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		$call="YEAR";
		$yearData=money::where('year',2021)->get();
		//return response()->json($yearData);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }

    public function thisMonth()
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		$call="MONTH";


        $date = money::whereDate('created_at', '>', Carbon::now()->subDays(30)) ->get();

		// $yearData=money::where('month',$month)
  //              ->where('year',$year)
  //              ->get();
	    return response()->json($date);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }

    public function thisDay()
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		//echo $year;
		$call="DAY";
		$yearData=money::where('day',$day)
               ->where('month',$month)
               ->where('year',$year)
               ->get();
		//return response()->json($yearData);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }

     public function search(Request $request)
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		//echo $year;
		$call="DAY";
		$yearData=money::where('day',$request->day)
               ->where('month',$request->month)
               ->where('year',$request->year)
               ->get();
		//return response()->json($yearData);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }

    public function search1(Request $request)
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		//echo $year;
		$call="DAY";
		$yearData=money::where('month',$request->month)
               ->where('year',$request->year)
               ->get();
		//return response()->json($yearData);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }

     public function search2(Request $request)
    {
        $date= new Carbon();
		$date->timezone('US/Central');
		$day=$date->day;
		$month=$date->month;
		$year=$date->year;
		//echo $year;
		$call="DAY";
		$yearData=money::where('year',$request->year)
               ->get();
		//return response()->json($yearData);
		return view('admin.money.thisYear',compact('yearData','call'));
               
    }
}
