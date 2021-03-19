
 @extends('include.footer2')
@extends('layouts.app')
   @section('content')

<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">Payment Id</th>
                <th align="center">Payment Number</th>
                <th>Amount</th>
                <th>Data</th>
                <th>details</th>
            </tr>
       

            @foreach( $user ?? '' as $row)

            <tr align="center" >
                <td>PI-{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->address}}</td>
                <td>{{$row->created_at}}</td>
                <td>  
                 @if($row->is_varified == 2)
                 <a href="{{ url ('/unblockUserAccess/'.$row->id) }}" class="btn  btn-info">UNBLOCK</a>
                  @else
                  <a href="{{ url ('/blockUserAccess/'.$row->id) }}" class="btn  btn-info">BLOCK</a>
                  @endif
                
               
               
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>

            @endsection
