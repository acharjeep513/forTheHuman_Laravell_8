<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\slide;
use Image;

class slidersController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
  public function index()
  {
     $slides = slide::where('status','active')->get();
     return view('Slider.slideRepresentation',compact('slides'));
  }

public function indexs()
{
  return view('admin.manageSlider.sliderIndex');

}

public function adminAddSlider()
{
  return view('admin.manageSlider.addSlider');
}


  public function adminShowSlider()
  {
  	 $slides = slide::orderBy('id','desc')->get();
  	 return view('admin.manageSlider.showSlider',compact('slides'));
  }
  public function slidesView($id)
  {
           $slides=slide::findorfail($id);
     
       
        return view('admin.manageSlider.editSlider',compact('slides'));   
            //return response()->json($student);
  }

  public function slidesEdit(Request $request,$id){
    
    $slide=new slide;
    $slide=slide::findorfail($id);
    $slide->delete();



		$slides=new slide;
		$slides->title=$request->title;
		$slides->image=$request->image;
		$slides->button_text=$request->button_text;
		$slides->button_link=$request->button_link;
        $slides->save();
        // return view('Slider.addSlider');
         $slides = slide::orderBy('id','desc')->get();
         return redirect()->route('adminManageSlider',compact('slides'));
   

  }


  public function sliderDelete($id)
  {


      $slides=new slide;
      $slides=slide::findorfail($id);
      $slides->delete();
  
     $slides = slide::orderBy('id','desc')->get();
     
     return redirect()->route('showSlider',compact('slides'));
   

  }

  public function slidesAdd()
  {

  	return view('slider.newSlidesAdd');
  }


  public function slidesAddToDatabase(Request $request)
  {
        
        $slides=new slide;
    $slides->title=$request->title;
    $slides->image=$request->image;
    $slides->button_text=$request->button_text;
    $slides->button_link=$request->button_link;
        $slides->save();

     $slides = slide::orderBy('id','desc')->get();
       return redirect()->route('adminManageSlider',compact('slides'));
    
  }



  public function activeSlider()
  {
    $slides = slide::orderBy('id','asc')->get();

    return response()->json($slides->title);
  }
}
