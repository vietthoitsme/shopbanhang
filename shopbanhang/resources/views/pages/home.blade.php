@extends('layout')
@section('content') 
                   <div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($all_product as $key => $product)
						
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<form action="">
												@csrf
												<input type="hidden" class="cart_product_id_{{$product->product_id}}" value="{{$product->product_id}}" >
												<input type="hidden" class="cart_product_name_{{$product->product_id}}" value="{{$product->product_name}}" >
												<input type="hidden" class="cart_product_image_{{$product->product_id}}" value="{{$product->product_image}}" >
												<input type="hidden" class="cart_product_price_{{$product->product_id}}" value="{{$product->product_price}}" >
												<input type="hidden" class="cart_product_qty_{{$product->product_id}}" value="1" >

												<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
													<img src="{{URL::to('public/uploads/product/',$product->product_image)}}" alt="" />
													<p style="color:black; font-size:17px">{{$product->product_name}}</p>
													<h2>{{number_format($product->product_price).' '. 'VND'}}</h2>
												</a>
													<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a> -->
												<button type="button" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart" >Thêm giỏ hàng</button>
											</form>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích </a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh </a></li>
									</ul>
								</div>
							</div>
						</div>

						@endforeach
					</div>
                
@endsection                    