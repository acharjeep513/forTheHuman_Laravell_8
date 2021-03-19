 @foreach( $money  as $row)
       @php
             if($loop->index == 0){
             $total_price =0;
           }
             $total_price += $row->amount;
          @endphp  
 
        @endforeach