@extends('layout')
@section('content') 

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
					<ol class="breadcrumb">
					<li><a href="#">Trang chủ </a></li>
					<li class="active">Giỏ hàng của bạn</li>
					</ol>
				</div>


			<div class="register-req">
				<p>Vui lòng đăng kí hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin gửi hàng</p>
							<div class="form-one">
								<form  method="post">
									@csrf
									<input type="text" name="shipping_email" class="shipping_email" placeholder="Email">
									<input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ">
									<input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
									<textarea name="shipping_note" class="shipping_note"  placeholder="Ghi chú đơn hàng của bạn" rows="16"></textarea>
									
									<div class="">
										<div class="form-group">
											<label for="exampleInputPassword1">Chọn hình thức thanh toán</label>
											<select name="payment_select" id="" class="form-control input-sm m-bot15 payment_select">
												<option value="0">Qua chuyển khoản</option>
												<option value="1">Tiền mặt</option>
											</select>
										</div>
									</div>
									<input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items--><section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ </a></li>
				  <li class="active">Giỏ hàng của bạn</li>
				</ol>
			</div>
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			@elseif(session()->has('error'))
				<div class="alert alert-danger">
					{{ session()->get('error') }}
				</div>
			@endif
			<div class="table-responsive cart_info">
			<form action="{{url('/update-cart')}}" method="post">
				@csrf
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng </td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@if(Session::get('cart') == true)
						<?php
								$total = 0;
							?>
						@foreach(Session::get('cart') as $key => $cart)
							<?php
								$subtotal = $cart['product_price']*$cart['product_qty'];
								$total += $subtotal;
							?>
						<tr>
							<td class="cart_product">
								<img src="{{asset('public/uploads/product/'.$cart['product_image'])}}"  width="50" alt="{{$cart['product_name']}}" />
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>{{$cart['product_name']}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart['product_price'],0,',','.')}}VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}" autocomplete="off" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									{{number_format($subtotal,0,',','.')}}VND

								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						<tr>
							<td><input type="submit" value="Cật nhật giỏ hàng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
							<td><a class="btn btn-default check_out" href="{{URL::to('/del-all-product')}}">Xóa tất cả</a></td>
							<td>
								<li>Tổng tiền: <span>{{number_format($total,0,',','.')}}VND</span></li>
								<li>Phí vận chuyển:  <span>Free</span></li>
								<li>Thành tiền: <span>{{number_format($total,0,',','.')}}VND</span></li>
							</td>
							<td>
								@if(Session::get('customers'))
								<a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Đặt hàng</a>
								@else
								<a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Đặt hàng</a>
								@endif
							</td>
						</tr>
						@else
						<tr><td colspan="5"><center>
							@php
							echo 'Bạn vui lòng thêm sản phẩm vào giỏ hàng' ;

						@endphp
						</center>
						</td>
						</tr>
						@endif
					</tbody>
					</form>
				</table>
			</div>
		</div>
	</section> 
@endsection