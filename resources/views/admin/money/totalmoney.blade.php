 @extends('include.footer2')
 @extends('layouts.app')
  @section('content')
<div class="container" align="center">
<br>
    <br>
    <div class="row">
      <div class="col-md-4">

      <form method="post"  action="{{url('/thisYear')}}" enctype="multipart/form-data">
                @csrf
        <button type="submit" class="btn btn-success">This year collection</button>
        </form>
      </div>


       <div class="col-md-4">
        <form method="post"  action="{{url('/thisMonth')}}" enctype="multipart/form-data">
                @csrf
        <button type="submit" class="btn btn-success">This month collection</button>
        </form>
      </div>
     

      <div class="col-md-4">
        <form method="post"  action="{{url('/thisDay')}}" enctype="multipart/form-data">
                @csrf
        <button type="submit" class="btn btn-success">This day collection</button>
        </form>
      </div>

</div>


<br>
<br>


 <form method="post"  action="{{url('/Search')}}" enctype="multipart/form-data">
                @csrf

      <div class="row" style="border: 1px solid black">
        <div class="col-md-12" style="font-size: 40px">Particular day</div>
        <div class="col-md-3">
          <div class="form-group">
                   
                    <input type="text" class="form-control" name="day" id="day"/>
                </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
                  
                    <input type="text" class="form-control" name="month" id="month"/>
                </div>
          
        </div>
        <div class="col-md-3">
          <div class="form-group">
                    
                    <input type="text" class="form-control" name="year" id="year"/>
                </div>
          
        </div>
        <div class="col-md-3">
        <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Search</button>
                </div>
          
        </div>
        
      </div>

</form>


<br>




 <form method="post"  action="{{url('/Search1')}}" enctype="multipart/form-data">
                @csrf

      <div class="row" style="border: 1px solid black">
        <div class="col-md-12" style="font-size: 40px">Specific month & year</div>
      
        <div class="col-md-4">
          <div class="form-group">
                  
                    <input type="text" class="form-control" name="month" id="month"/>
                </div>
          
        </div>
        <div class="col-md-4">
          <div class="form-group">
                    
                    <input type="text" class="form-control" name="year" id="year"/>
                </div>
          
        </div>
        <div class="col-md-4">
        <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Search</button>
                </div>
          
        </div>
        
      </div>

</form>

<br>

<form method="post"  action="{{url('/Search2')}}" enctype="multipart/form-data">
                @csrf

      <div class="row" style="border: 1px solid black">
        <div class="col-md-12" style="font-size: 40px">Specific  year</div>
      
       
        <div class="col-md-6">
          <div class="form-group">
                    
                    <input type="text" class="form-control" name="year" id="year"/>
                </div>
          
        </div>
        <div class="col-md-6">
        <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Search</button>
                </div>
          
        </div>
        
      </div>

</form>













       
      
    </div>
    <br>
    <br>
    <br>
    <br>
     @foreach( $money  as $row)
       @php
             if($loop->index == 0){
             $total_price =0;
           }
             $total_price += $row->amount;
          @endphp  
 
        @endforeach

        

 <div class="row">
 	<div class="col-md-4" style="font-size: 30px;background-color: green">
 		Total collection
 	</div>
 	<div class="col-md-8" style="font-size: 30px;background-color: green">
 		{{$total_price}}
 	</div>
 </div>

</div>

     @endsection