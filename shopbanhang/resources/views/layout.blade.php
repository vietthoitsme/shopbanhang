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
								
								<li><a href="#"><i class="fa fa-heart"></i> Y??u th??ch</a></li>
								
								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id!=NULL && $shipping_id==NULL) {
									
								?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-money"></i> Thanh to??n</a></li>
								
								<?php
									}else if($customer_id!=NULL && $shipping_id!=NULL) {
								?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-money"></i> Thanh to??n</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-money"></i> Thanh to??n</a></li>
								<?php
									}
								?>
								

								<li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id != NULL){
									
								?>
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-sign-out"></i> ????ng xu???t</a></li>
								
								<?php
									}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-sign-in"></i> ????ng nh???p</a></li>
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
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang ch???</a></li>
								<li class="dropdown"><a href="#">S???n ph???m<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">S???n ph???m</a></li>
										<li><a href="product-details.html">Chi ti???t s???n ph???m</a></li> 
										<li><a href="cart.html">Gi??? h??ng</a></li> 
										<li><a href="login.html">????ng nh???p</a></li> 
                                    </ul>
                                </li> 
								<li><a href="#">Tin t???c<i ></i></a>
                                
                                </li> 
								<li><a href="{{URL::to('/show-cart')}}">Gi??? h??ng</a></li>
								<li><a href="{{URL::to('/trang-chu')}}">Li??n h???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<form action="{{URL::to('/tim-kiem')}}" method="post">
							{{ csrf_field() }}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m"/>
							<input type="submit" style="margin-top:0;color:#FFF;width:70px  "   name="Search_items" class="btn btn-primary btn-sm" value="T??m ki???m">
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
									<h2>Nhanh-Ngon-An To??n</h2>
									<p>B???n mu???n c?? m???t b???a ??n ngon h??y ?????n v???i FADISAFOOD </p>
									<button type="button" class="btn btn-default get">?????t h??ng ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset("public/frontend/images/logoga2.png")}}" class="girl img-responsive" style="margin-left:70px" alt="" />
									<!-- <img src="{{("public/frontend/images/pricing.png")}}"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>FADISA</span>-FOOD</h1>
									<h2>3 G?? GI??N VUI V??? + 1 M??? ?? S???T B?? B???M + 1 KHOAI T??Y CHI??N V???A + 2 LY PEPSI V???A</h2>
									<p style="font-size:30px ;color:red" > <i> Gi?? ch???</i> <b> 179.000 VND</b> </p>
									<button type="button" class="btn btn-default get">?????t h??ng ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset("public/frontend/images/combocanhacungan.jpg")}}" class="girl img-responsive" alt="" />
									<!-- <img src="{{("public/frontend/images/pricing.png")}}"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>FADISA</span>-FOOD</h1>
									<h2>3 G?? GI??N VUI V??? + 1 M??? ?? S???T B?? B???M + 1 KHOAI T??Y CHI??N V???A + 2 LY PEPSI V???A</h2>
									<p style="font-size:20px ;color:red" >179.000 VND </p>
									<button type="button" class="btn btn-default get">?????t h??ng ngay</button>
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
						<h2>Danh m???c s???n ph???m</h2>
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
						
							<h2>Th????ng hi???u s???n ph???m</h2>
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
							<p>Nhanh-Ngon-An to??n</p>
						</div>
					
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>D???ch v???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tr??? gi??p tr???c tuy???n</a></li>
								<li><a href="#">Li??n h??? v???i ch??ng t??i</a></li>
								<li><a href="#">T??nh tr???ng ?????t h??ng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>C???a h??ng nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">G?? r??n</a></li>
								<li><a href="#">G?? s???t cay</a></li>
								<li><a href="#">M?? ??</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Ch??nh s??ch</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??i???u kho???n s??? d???ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
								<li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>V??? c???a h??ng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng tin c??ng ty</a></li>
								<li><a href="#">Quan t??m</a></li>
								<li><a href="#">B???n quy???n</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">No Copyright ?? FADISAFOOD. All rights reserved.</p>
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
					title: "X??c nh???n ????n h??ng ",
					text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "X??c nh???n",
					cancelButtonText: "????ng, ch??a mua",
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
									swal("????n h??ng", "????n h??ng c???a b???n ???? ?????t th??nh c??ng", "success");
								}
							});
							window.setTimeout(function(){
								location.reload();
							},3000);
						}else{
							swal("???? ????ng", "????n h??ng ch??a ?????t,vui l??ng ho??n t???t ????n h??ng)", "error");
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
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
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