@extends('include.footer2')
@extends('layouts.app')
   @section('content')

<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">ID</th>
                <th align="center">Notice</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
       

            @foreach( $notice ?? '' as $row)

            <tr align="center" >
                <td>{{$row->id}}</td>
                <td>{{$row->notice}}</td>
                <td>{{$row->DD}}/{{$row->MM}}/{{$row->YYYY}}</td>
                  
                
                <td><a href="{{ url ('/detailNotice/'.$row->id) }}" class="btn  btn-info">Read</a>
               
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>

            @endsection
