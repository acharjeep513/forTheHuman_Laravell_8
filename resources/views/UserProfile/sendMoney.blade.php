@extends('include.footer2')
                  @extends('layouts.app')
            


@section('content')
                   <h1 align="center">Send Money</h1>
            <form method="post"  action="{{url('/saveSendMoney')}}" enctype="multipart/form-data">
                @csrf




             <input type="hidden" name="date1" value="{{ $date1 }}">
            <input type="hidden" name="date2" value="{{ $date2 }}">
            <input type="hidden" name="date3" value="{{ $date3 }}">
            











            <div class="card-body" style="margin-left: 250px;margin-right: 250px ">
                
                <div class="form-group">
                    <label>Payment Number</label>
                    <input type="text" class="form-control" name="payment_number" id="payment_number"/>
                </div>
               

                  <div class="form-group ">
                      <label for="payment_method" class=" col-form-label text-md-right">Payment Method</label>payment_number
                  <div >
                               <select class="form-control" name="payment_method" id="payment_method" >
                                   <option value="">
                                       Please select your payment method
                                   </option>
                                 
                                   <option >B-kash</option>
                                   <option >U-cash</option>
                               </select>
                            </div>
                        </div>
                       




                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="amount" id="amount"/>
                </div>
                


                 <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
                    </div>

                </div>
                
            </div>





                </div>
                
            </form>
        </div>
    </div>
            @endsection
























 
