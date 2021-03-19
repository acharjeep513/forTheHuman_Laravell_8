 @extends('include.footer2')
@extends('layouts.app')
@section('content')

                <form method="post"  action="{{url('/blocKUserAccessSave/'.$users->id)}}" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="id" value="{{ $users->id }}">
            <input type="hidden" name="name" value="{{ $users->name }}">
            <input type="hidden" name="email" value="{{ $users->email }}">
            <input type="hidden" name="password" value="{{ $users->password }}">
            <input type="hidden" name="$verification_code" value="{{ $users->verification_code }}">

                   <div class="form-group" style="height: 10px;width: 1000px;margin-left: 500px;font-size: 20px" >
                   Name:{{$users->id}}
                </div>
                <div class="form-group" style="height: 10px;width: 1000px;margin-left: 500px;font-size: 20px" >
                   Name:{{$users->name}}
                </div>
                <div class="form-group" style="height: 10px;width: 1000px;margin-left: 500px;font-size: 20px" >
                   Name:{{$users->email}}
                </div>

                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Block</button>
                </div>


                </div>
                
            </div>





                </div>
                
            </form>

@endsection
