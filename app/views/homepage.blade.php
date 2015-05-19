@extends('master')

@section('header')
	<link
	type="text/css"
	rel="stylesheet"
	href="{{ asset("css/content.css") }}"
	/>
@stop

@section('content')

	<!--Bootstrap Carousel-->
	<div class="row">
		<div class="slider">
			<div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
				<div class="carousel-inner">
					<div class="active item">
						<img src="/public/img/banner/banner_earpods.jpg">
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>

					<div class="item">
						<img src="/public/img/banner/beats_banner.jpg">
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>

					<div class="item">
						<img src="/public/img/banner/lehmann_banner.jpg">
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
				</div>
				<!-- Left and right controls -->
				<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    			<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    			<span class="sr-only">Next</span>
				</a>
			</div>		
		</div>
	</div>

	<!--Row 2-->
	<div class="row">
		<div class="col-md-3">				
			<div class="row category">
				<div id='cssmenu'>
				<ul>
					@foreach($categories as $category)
						<li class="active has-sub"><a href="#">{{$category->brand}}</a>
							<ul>
							@foreach($category->types as $type)
								<li><a href="#"><span>{{$type->name}}</span></a></li>
							@endforeach
							</ul>
						</li>
					@endforeach
				</ul>
				</div>
			</div>			
		</div>

		<div class="col-md-9 right-wrapper">
			<div class="row product">
				<div class="title">
					<h3>Sản phẩm bán chạy</h3>				
				</div>				
			</div>
			<!--Hot Product-->			
			<div class="row product">
				<ul id = "product-hot">
					@foreach($hot_products as $hot_product)
					<li class="product-box">
						<a href="#">					
							<img src="{{$hot_product->url}}">									
							<p class="caption">{{$hot_product->name}}</br>{{$hot_product->price}} đ</p>
							<input type="button" value="Mua ngay">
						</a>
					</li>
					@endforeach
		
				<div class="more">
					<a href="#">Xem thêm</a>
				</div>
			</div>

			<div class="row product">
				<div class="title">
					<h3>Sản phẩm mới</h3>
				</div>
			</div>
			<div class="row product">
				<ul id="product-new">
					@foreach($new_products as $new_product)
					<li class="product-box">
						<a href="#">					
							<img src="{{$new_product->url}}">							
							<p class="caption">{{$new_product->name}}</br>{{$new_product->price}} đ</p>
							<input type="button" value="Mua ngay">
						</a>
					</li>
					@endforeach															
				</ul>
				<div class="more">
					<a href="#">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>		
	<!--Footer-->	
	@include('temp.footer')
	
@stop
