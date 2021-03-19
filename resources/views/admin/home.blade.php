 @extends('include.footer2')
@extends('layouts.app')
                 @section('content')
                     <div class="flash-message" align="center">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>
       
<div class='container' >
      <div class="row" style="height: 65px;border-top: 10px">
        <div class="col-md-12">
           <h5 align="center" style="font-size: 30px">Activity</h5>
        </div>
      </div>
    <div class="row">
        <div class="col-md-4" >
             <h5 class="card-title" align="center">Activity</h5>
           <div class="list-group">
         <a href="{{url('/totalmoney')}}"  class="list-group-item list-group-item-action"style="height: 40px;margin: 15px">Total Money</a>
        <a href="{{url('/adminManageSlider')}}"  class="list-group-item list-group-item-action" style="height: 40px;margin: 15px;background:'black'">Slider access</a>
        <a href="{{url('/indexNotice')}}"  class="list-group-item list-group-item-action"style="height: 40px;margin: 15px">Notice access</a>
        <a href="{{url('/ActivityAccess')}}"  class="list-group-item list-group-item-action"style="height: 40px;margin: 15px">Activity access</a>
        <a href="{{url('/blockUserAccess')}}"  class="list-group-item list-group-item-action"style="height: 40px;margin: 15px">Block user access</a>
        
        <form method="post"  action="{{ route('logout') }}" enctype="multipart/form-data">
                @csrf
     

                <div class="form-group" >
                    <button type="submit" class="btn " style="margin-left: 17px;border:2px solid;width: 350px">Logout</button>
         
            </div>
            </form> 
       
      
</div>
        </div>
<div class="col-md-8">
 <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img height="430" src="{{asset('front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="430" src="{{asset('front-end/Image/a.jpg')}}" alt="Chicago" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="430" src="{{asset('front-end/Image/a.jpg')}}" alt="New York" class="w-100">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
</div>
    </div>  
</div>
             <div class="container" align="center">
                <div class="row">
                    <h5 style="margin-left: 520px">Add District</h5>
                <div class="col-md-12">
            
             
            <form method="post"  action="{{ route('logout') }}" enctype="multipart/form-data">
                @csrf
            <div class="card-body"

                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >ADD</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
            @endsection
