@extends('include.footer2')

 @extends('layouts.app')
 
                 @section('content')

     
<br>
               


<div class="row">

<br>
    <br>
    <div class="col-md-12">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
           
                <th align="center"> Id</th>
                <th align="center">Activity Name</th>
                <th align="center">Image</th>
                <th align="center">Details</th>
              
             
                
            </tr>
       


            @foreach( $activity ?? '' as $activity)
            <tr align="center" >
              
                <td>{{$activity->id}}</td>
                <td>{{$activity->name}}</td>
                <td>{{$activity->image}}</td>
                <td>{{$activity->details}}</td>
                
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>

      
    
            @endsection