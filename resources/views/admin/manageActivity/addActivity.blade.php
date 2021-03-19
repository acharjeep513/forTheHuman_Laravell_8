
                 @extends('include.footer2')
         
        
         @extends('layouts.app')
            @section('content')
  <form method="post"  action="{{url('/activityAddToDatabase')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label>image</label>
                    <input type="text" class="form-control" name="image" id="image"/>
                </div>
                <div class="form-group">
                    <label>details</label>
                    <input type="text" class="form-control" name="details" id="details"/>
                </div>
               
               
                 
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Activity add</button>
                </div>
            </div>
            </form>
            @endsection