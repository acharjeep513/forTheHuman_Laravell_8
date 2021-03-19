
@extends('include.footer2')
@extends('layouts.app')
   @section('content')

<div class="container" align="center" style="border: 1.2px solid black;width: 800px">
    <div >
    <h1  style="margin-left: 480px;font-size: 25px"> Pablication Date:{{$notice->DD}}/{{$notice->MM}}/{{$notice->YYYY}}</h1>
    </div>

<div class="w-100" >
    <h1 style="font-size: 35px;height: 100%">Subject:{{$notice->notice}}</h1>
</div>
<div class="w-80" style="height:105%">
    <h1 style="font-size: 15px">{{$notice->notice_full}}</h1>
</div>

</div>

            @endsection
