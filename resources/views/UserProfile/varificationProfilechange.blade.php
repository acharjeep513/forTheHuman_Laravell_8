@extends('include.footer2')
                  @extends('layouts.app')
            


@section('content')
            
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>

   
                <form method="post"  action="{{url('/sendVerification')}}" enctype="multipart/form-data">
                @csrf
           <input type="hidden" name="user_name" value="{{ $user->name }}">
            <input type="hidden" name="email" value="{{ $user->email }}">
            <input type="hidden" name="$verification_code" value="{{ $user->verification_code }}">
                 <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Click here to sent verification link</button>
                </div>
                    </div>

                </div>
                
            </div>





                </div>
                
            </form>
        </div>
    </div>
             
            @endsection
























 
