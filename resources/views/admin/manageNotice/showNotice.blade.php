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
                <th align="center"> Subject</th>
                <th align="center">Notice</th>
                <th align="center">Date</th>
                <th align="center">Action</th>
              
             
                
            </tr>
       


            @foreach( $notice ?? '' as $notice)
            <tr align="center" >
                  <td>{{$notice->id}}</td>
                <td>{{$notice->notice}}</td>
                <td>{{$notice->notice_full}}</td>
                <td>{{$notice->DD}}/{{$notice->MM}}/{{$notice->YYYY}}</td>
                 
                <td>
                    <a href="{{ url ('/adminDeleteNotice/'.$notice->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
                
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>

      
    
            @endsection