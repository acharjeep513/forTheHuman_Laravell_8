
                 @extends('include.footer2')
         
        
         @extends('layouts.app')
            @section('content')
            
           

<div class='container' >
    <div class="row" style="height: 65px;border-top: 10px">
      <div class="col-md-12">
        <h5 align="center">Notice Managment</h5>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4" >
             <h5 class="card-title" align="center">Catagory</h5>
           <div class="list-group">
     
          <a href="{{url('/addNotice')}}"  class="list-group-item list-group-item-action" style="height: 60px;margin: 20px;background:'black'">Add notice</a>
          <a href="{{url('/adminShowNoice')}}"  class="list-group-item list-group-item-action"style="height: 60px;margin: 20px">Show notice</a>
         
          <form method="post"  action="{{ route('logout') }}" enctype="multipart/form-data">
                @csrf
     

                <div class="form-group" >
                    <button type="submit" class="btn " style="margin-left: 17px;border:2px solid;width: 350px;background-color: red">Logout</button>
         
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
            <img height="480px" src="{{asset('front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="480px" src="{{asset('front-end/Image/a.jpg')}}" alt="Chicago" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="480px" src="{{asset('front-end/Image/a.jpg')}}" alt="New York" class="w-100">
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
            @endsection