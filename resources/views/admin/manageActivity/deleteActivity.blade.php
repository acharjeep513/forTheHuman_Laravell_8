@extends('include.footer2')

 @extends('layouts.app')
 
                 @section('content')


<div class="row">

<br>
    <br>
    <div class="col-md-12">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
                
                <th align="center">Id</th>
                <th align="center">Name</th>
                <th align="center">Image</th>
                <th align="center">Details</th>
             
             
                <th>Action</th>
              
            </tr>
       


            @foreach( $activity ?? '' as $activity)
             <tr align="center" >
              
                <td>{{$activity->id}}</td>
                <td>{{$activity->name}}</td>
                <td>{{$activity->image}}</td>
                <td>{{$activity->details}}</td>
           
                
                
                <td>
                    <a href="{{ url ('/adminDeleteActivitySave/'.$activity->id) }}" class="btn  btn-info">Delete</a>
                </td>
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>

      
    
            @endsection