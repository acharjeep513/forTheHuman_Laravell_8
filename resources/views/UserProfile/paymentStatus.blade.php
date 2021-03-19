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
       

            @foreach( $moneyData ?? '' as $row)

            <tr align="center" >
                <td>PI-{{$row->id}}</td>
                <td>{{$row->payment_number}}</td>
                <td>{{$row->amount}}</td>
                <td>{{$row->created_at}}</td>  
                
                <td><a href="{{ url ('/detailNotice/'.$row->id) }}" class="btn  btn-info">Details</a>
               
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>

            @endsection
