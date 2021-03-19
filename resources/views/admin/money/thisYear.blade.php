 @extends('include.footer2')
 @extends('layouts.app')
  @section('content')
  <div align="center" style="font-size: 80px">THIS {{$call}}</div>
<div class="container" align="center">
<br>
    <br>

    </div>
     @foreach( $yearData  as $row)
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