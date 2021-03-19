
                 @extends('include.footer2')
         
        
         @extends('layouts.app')
            @section('content')
  <form method="post"  action="{{url('/addNoticeSave')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>Notice subject</label>
                    <input type="text" class="form-control" name="notice" id="notice"/>
                </div>
                <div class="form-group">
                    <label>Details</label>
                    <input type="text" class="form-control" name="notice_full" id="notice_full"/>
                </div>

                <div class="form-group row">
                            <label for="division_ID" class="col-md-4 col-form-label text-md-right">{{ __('Day') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="DD">
                                   <option>
                                       Please select your District
                                   </option>

                                   <option >1</option>
                                   <option >2</option>
                                   <option >3</option>
                                   <option >4</option>
                                   <option >5</option>
                                   <option >6</option>
                                   <option >7</option>
                                   <option >8</option>
                                   <option >9</option>
                                   <option >10</option>
                                   <option >11</option>
                                   <option >12</option>
                                   <option >13</option>
                                   <option >14</option>
                                   <option >15</option>
                                   <option >16</option>
                                   <option >17</option>
                                   <option >18</option>
                                   <option >19</option>
                                   <option >20</option>
                                   <option >21</option>
                                   <option >22</option>
                                   <option >23</option>
                                   <option >24</option>
                                   <option >25</option>
                                   <option >26</option>
                                   <option >27</option>
                                   <option >28</option>
                                   <option >29</option>
                                   <option >30</option>
                                   <option >30</option>

                               </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division_ID" class="col-md-4 col-form-label text-md-right">{{ __('Month') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="MM">
                                   <option>
                                       Please select your District
                                   </option>

                                   <option >1</option>
                                   <option >2</option>
                                   <option >3</option>
                                   <option >4</option>
                                   <option >5</option>
                                   <option >6</option>
                                   <option >7</option>
                                   <option >8</option>
                                   <option >9</option>
                                   <option >10</option>
                                   <option >11</option>
                                   <option >12</option>
                                  

                               </select>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="division_ID" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="YYYY">
                                   <option>
                                       Please select your District
                                   </option>

                                   <option >2021</option>
                                   <option >2022</option>
                                   <option >2023</option>
                                   <option >2024</option>
                                   <option >2025</option>
                                   <option >2026</option>
                                   <option >2027</option>
                                   <option >2028</option>
                                   <option >2029</option>
                                   <option >2030</option>
                                   <option >2031</option>
                                   <option >2032</option>
                                  

                               </select>
                            </div>
                        </div>
               
               
                 
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Notice add</button>
                </div>
            </div>
            </form>
            @endsection