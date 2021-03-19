@extends('include.footer2')

@extends('layouts.app')

 @section('content')
  <div class="container">
  	<div>
  		
  	     @foreach( $slides ?? '' as $slides)
         <img height="500" src="{{asset('front-end/Image/social.jpg')}}" alt="Los Angeles" class="w-100">
          @endforeach
  		

  	</div>
  	
  </div>
 @endsection
