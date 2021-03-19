<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notice;
use App\Models\Activity;
class NoticeController extends Controller
{   
 
    
   
    public function mainNotice()
    {

    	 $notice = notice::all();
    	 //return response()->json($notice->notice);

    	 return view('Notice.allNotice',compact('notice'));
    }

    public function detailNotice($id)
    {
        $notice=notice::findorfail($id);
        //return response()->json($notice);

        return view('Notice.detailNotice',compact('notice'));
    }

    

}
