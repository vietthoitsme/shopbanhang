@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin đăng nhập
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên khách hàng </th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td>{{$customer->customer_name}}</td>
            <td>{{$customer->customer_phone}}</td>
            <td>{{$customer->customer_email}}</td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin vận chuyển hàng
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên người vận chuyển </th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Ghi chú </th>
            <th>Hình thức thanh toán</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td>{{$shipping->shipping_name}}</td>
            <td>{{$shipping->shipping_address}}</td>
            <td>{{$shipping->shipping_phone}}</td>
            <td>{{$shipping->shipping_email}}</td>
            <td>{{$shipping->shipping_note}}</td>
            <td>@if($shipping->shipping_method==0) Chuyển khoản @else Tiền mặt @endif</td>
            

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>  
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê chi tiết đơn hàng
    </div>
   
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng </th>
            <th>Giá </th>
            <th>Tổng tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
          $total = 0;
          @endphp
        @foreach($order_details as $key => $details)
          @php
          $i++;
          $subtotal = $details->product_price*$details->product_sales_quantity;
          $total += $subtotal;
          @endphp
          <tr>
            <td><i>{{$i}}</i></td>
            <td>{{$details->product_name}}</td>
            <td>{{$details->product_sales_quantity}}</td>
            <td>{{number_format($details->product_price,0,',','.')}}VND</td>
            <td>{{number_format($subtotal,0,',','.')}}VND</td>
          </tr>
          @endforeach
          <tr>
            <td colspan="2">Tổng thanh toán: </td>
            <td >{{number_format($total,0,',','.')}}VND</td>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>
</div>
@endsection