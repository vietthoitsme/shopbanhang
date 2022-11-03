<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$meta_desc}}">
    <meta name="author" content="">
	<meta name="keywords" content="{{$meta_keywords}}"/>
	<link rel="canonical" href="{{$url_canonical}}"/>
    <title>{{$meta_title}}</title>
    <link href="{{asset("public/frontend/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/css/prettyPhoto.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/css/price-range.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/css/animate.css")}}" rel="stylesheet">
	<link href="{{asset("public/frontend/css/main.css")}}" rel="stylesheet">
	<link href="{{asset("public/frontend/css/responsive.css")}}" rel="stylesheet">
	<link href="{{asset("public/frontend/css/sweetalert.css")}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset("public/frontend/images/ico/favicon.ico")}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset("public/frontend/images/ico/apple-touch-icon-144-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset("public/frontend/images/ico/apple-touch-icon-114-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset("public/frontend/images/ico/apple-touch-icon-72-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset("public/frontent/images/ico/apple-touch-icon-57-precomposed.png")}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0932421564</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>FaDiSaFood@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{asset("public/frontend/images/logoga.png")}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
							
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="#"><i class="fa fa-heart"></i> Yêu thích</a></li>
								
								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id!=NULL && $shipping_id==NULL) {
									
								?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-money"></i> Thanh toán</a></li>
								
								<?php
									}else if($customer_id!=NULL && $shipping_id!=NULL) {
								?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-money"></i> Thanh toán</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-money"></i> Thanh toán</a></li>
								<?php
									}
								?>
								

								<li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id != NULL){
									
								?>
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
								
								<?php
									}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
								<?php
									}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phẩm</a></li>
										<li><a href="product-details.html">Chi tiết sản phẩm</a></li> 
										<li><a href="cart.html">Giỏ hàng</a></li> 
										<li><a href="login.html">Đăng nhập</a></li> 
                                    </ul>
                                </li> 
								<li><a href="#">Tin tức<i ></i></a>
                                
                                </li> 
								<li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
								<li><a href="{{URL::to('/trang-chu')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<form action="{{URL::to('/tim-kiem')}}" method="post">
							{{ csrf_field() }}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
							<input type="submit" style="margin-top:0;color:#FFF;width:70px  "   name="Search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>FADISA</span>-FOOD</h1>
									<h2>Nhanh-Ngon-An Toàn</h2>
									<p>Bạn muốn có một bữa ăn ngon hãy đến với FADISAFOOD </p>
									<button type="button" class="btn btn-default get">Đặt hàng ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset("public/frontend/images/logoga2.png")}}" class="girl img-responsive" style="margin-left:70px" alt="" />
									<!-- <img src="{{("public/frontend/images/pricing.png")}}"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>FADISA</span>-FOOD</h1>
									<h2>3 GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 1 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA</h2>
									<p style="font-size:30px ;color:red" > <i> Giá chỉ</i> <b> 179.000 VND</b> </p>
									<button type="button" class="btn btn-default get">Đặt hàng ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset("public/frontend/images/combocanhacungan.jpg")}}" class="girl img-responsive" alt="" />
									<!-- <img src="{{("public/frontend/images/pricing.png")}}"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>FADISA</span>-FOOD</h1>
									<h2>3 GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 1 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA</h2>
									<p style="font-size:20px ;color:red" >179.000 VND </p>
									<button type="button" class="btn btn-default get">Đặt hàng ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset("public/frontend/images/combocanhacungan.jpg")}}" class="girl img-responsive" alt="" />
									<!-- <img src="{{("public/frontend/images/pricing.png")}}"  class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a style="color:black"; href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
						
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a style="color:black" ; href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						
						</div><!--/brands_products-->
						

					
					</div>
				</div> 
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-1">
					
						<div class="companyinfo">
							<h2><span>FADISA</span>-FOOD</h2>
							<p>Nhanh-Ngon-An toàn</p>
						</div>
					
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ giúp trực tuyến</a></li>
								<li><a href="#">Liên hệ với chúng tôi</a></li>
								<li><a href="#">Tình trạng đặt hàng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Cửa hàng nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Gà rán</a></li>
								<li><a href="#">Gà sốt cay</a></li>
								<li><a href="#">Mì ý</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Chính sách hoàn lại tiền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Về cửa hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Quan tâm</a></li>
								<li><a href="#">Bản quyền</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">No Copyright © FADISAFOOD. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset("public/frontend/js/jquery.js")}}"></script>
	<script src="{{asset("public/frontend/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("public/frontend/js/jquery.scrollUp.min.js")}}"></script>
	<script src="{{asset("public/frontend/js/price-range.js")}}"></script>
    <script src="{{asset("public/frontend/js/jquery.prettyPhoto.js")}}"></script>
    <script src="{{asset("public/frontend/js/main.js")}}"></script>
	<script src="{{asset("public/frontend/js/sweetalert.min.js")}}"></script>
	<script>
		$(document).ready(function(){
			$('.send_order').click(function(){
				swal({
					title: "Xác nhận đơn hàng ",
					text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Xác nhận",
					cancelButtonText: "Đóng, chưa mua",
					closeOnConfirm: false,
					closeOnCancel: false
					},
					function(isConfirm){
						if (isConfirm) {
							var shipping_email = $('.shipping_email').val();
							var shipping_name = $('.shipping_name').val();
							var shipping_address = $('.shipping_address').val();
							var shipping_phone = $('.shipping_phone').val();
							var shipping_note = $('.shipping_note').val();
							var shipping_method = $('.payment_select').val();
							var _token  = $('input[name="_token"]').val();				
							$.ajax({
								url: '{{url('/confirm-order')}}',
								method: 'POST',
								data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,
									shipping_phone:shipping_phone,shipping_note:shipping_note,shipping_method:shipping_method,_token:_token},
								success:function(){
									swal("Đơn hàng", "Đơn hàng của bạn đã đặt thành công", "success");
								}
							});
							window.setTimeout(function(){
								location.reload();
							},3000);
						}else{
							swal("Đã đóng", "Đơn hàng chưa đặt,vui lòng hoàn tất đơn hàng)", "error");
						}
					
					});
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				var id = $(this).data('id_product');
				var cart_product_id = $('.cart_product_id_' + id).val();
				var cart_product_name = $('.cart_product_name_' + id).val();
				var cart_product_image = $('.cart_product_image_' + id).val();
				var cart_product_price = $('.cart_product_price_' + id).val();
				var cart_product_qty = $('.cart_product_qty_' + id).val();
				var _token  = $('input[name="_token"]').val();				
				$.ajax({
					url: '{{url('/add-cart-ajax')}}',
					method: 'POST',
					data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
					cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
					success:function(data){
						swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });
					}
				});
			});
		});
	</script>
</body> 
</html>