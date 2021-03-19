 <div style="background-color: red; margin-top: 5px">
 <p style="font-size: 22px;align-items: center;margin-left: 570px;font-size:40px "> Current Activity</p>
 </div>

 <div class="row">

    
         @foreach( $activity ?? '' as $activity)
         <form method="post"  action="{{url('read/'.$activity->id)}}" enctype="multipart/form-data">
        <div class="col-md-4">
            <div class="card-deck">
                
                <div class="card-body">
                    <h5>
                        <img  style="width:75%" src="{{asset('front-end/Image/social.png')}}">
                      </h5>
                      <h1 >{{$activity->name}}</h1>
                        <p style="margin-right: 40px;width:300px">
                          {{$activity->details}}                  
                        </p>
                        <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >READ</button>
                    </h5>
                </div>
                
            </div>
        </div>    
       </form>    
        @endforeach
   
        

              
    </div>