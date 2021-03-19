 @extends('include.footer2')
@extends('layouts.app')
   @section('content')

<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">Name</th>
                <th align="center">Subject</th>
                <th align="center">View</th>
            </tr>
       

            @foreach( $massage ?? '' as $row)

            <tr align="center" >
               
                <td>{{$row->user_name}}</td>
                <td>{{$row->subject}}</td>
                <td>
                     <form method="post"  action="{{ url ('/adminSingleMsg/'.$row->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ $row->user_id }}">
            <input type="hidden" name="admin_id" value="{{ $row->admin_id }}">

                <button class="btn btn-success">View</button>
            </form>
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>

            @endsection
