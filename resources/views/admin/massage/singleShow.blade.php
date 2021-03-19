 @extends('include.footer2')
@extends('layouts.app')
   @section('content')

<div class="container" align="center">
   

              
                <div class="row">
                	<div class="col-md-12" style="border: 1px solid black">
                		<div style="font-size: 30px">{{$msg->massage}}</div>
                		<div style="margin-left: 800px">----  {{$msg->user_name}}</div>
                		
                	</div>
                </div>



</div>


           <h1 align="center">Send Massage</h1>
            <form method="post"  action="{{url('/adminReplayMsg')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body" style="margin-left: 250px;margin-right: 250px ">
                
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject"/>
                </div>
               

             
                <div class="form-group">
                    <label>Massage</label>
                    <input type="text" style="height: 250px" class="form-control" name="massage" id="massage"/>
                </div>
                


                 <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Send</button>
                </div>
                    </div>

                </div>
                
            </div>





                </div>
                
            </form>
        </div>
    </div>

            @endsection
