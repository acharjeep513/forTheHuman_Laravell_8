<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function ActivityAccess()
    {
    	return view('admin.manageActivity.activityIndex');
    }

     public function adminAddActivity()
    {
    	return view('admin.manageActivity.addActivity');
    }

    public function activityAddToDatabase(Request $request)
  {
        
    $activity=new activity;
    $activity->name=$request->name;
    $activity->image=$request->image;
    $activity->details=$request->details;
    $activity->save();

    return redirect()->route('activity');
  }



   public function adminShowActivity()
   {
   	$activity=Activity::all();
   	return view('admin.manageActivity.showActivity',compact('activity'));
   }

   public function adminDeleteActivity()
   {
   	  $activity=Activity::all();
      return view('admin.manageActivity.deleteActivity',compact('activity'));
   }

   public function adminDeleteActivitySave($id)
   {
   	    $Activity=new Activity;
    $Activity=Activity::findorfail($id);
    $Activity->delete();
    
    return redirect()->route('activity');

   }
}
