@extends('include.footer2')
            @extends('layouts.app')
            @section('content')
                   <h1 align="center">Send Massage</h1>
            <form method="post"  action="{{url('/sendMassage')}}" enctype="multipart/form-data">
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



