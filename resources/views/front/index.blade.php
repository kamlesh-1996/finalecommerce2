@extends('layouts.front-master')

@section('title','Shop Online Surgical Instruments, Surgical Products at SURGIWEAR')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/css/flexslider.css') }}" media="all" />
@endsection

@section('content')
<div class="main-container col2-left-layout container">
	<div class="main-container col1-layout ">
		<div class="main">
			<div class="col-main">
				<div class="magestore-bannerslider">
					<div class="magestore-bannerslider-standard">
						<div class="home-slider">
							<div id="carousel-9-3" class="flexslider flexslider_thumbnail flexslider-9-3">
								<ul class="slides">
									<li>
										<a href="javascript:void(0)" onclick="window.location.href ='neurosurgery.html';">
											<img src="{{ asset('frontassets/images/category/neurosurgery_2.jpg') }}" class="img-responsive" alt="Neurosurgery" />
											<p>Neurosurgery </p>
										</a>
									</li>
									<li>
										<a href="orthopaedics.html" onclick="window.location.href ='orthopaedics.html';">
											<img src="{{ asset('frontassets/images/category/orthopedic_1.jpg') }}" class="img-responsive" alt="Orthopaedics" />
											<p>Orthopaedics </p>
										</a>
									</li>
									<li>
										<a href="ophthalmology.html" onclick="window.location.href ='ophthalmology.html';">
											<img src="{{ asset('frontassets/images/category/ophthalmology_1.jpg') }}" class="img-responsive" alt="Ophthalmology" />
											<p>Ophthalmology </p>
										</a>
									</li>
									<li>
										<a href="plastic-surgery.html" onclick="window.location.href ='plastic-surgery.html';">
											<img src="{{ asset('frontassets/images/category/1_1_1.jpg') }}" class="img-responsive" alt="Plastic Surgery" />
											<p>Plastic Surgery </p>
										</a>
									</li>
									
								</ul>
							</div>
							<div id="slider-9-3" class="flexslider home_main_banner flexslider-9-3">
								<ul class="slides"> 
									@php $counter = 1 @endphp
									@if(isset($banners) && !empty($banners))
									@foreach($banners as $key => $value )
									<li>
										<a href="" target="_self" onclick="bannerClicks('15','3')" style="display:block"><img alt="Surgiwear Banner" src="{{ asset('banner/'.$value->image) }}"/></a>
									</li>
									@php $counter++ @endphp
									@endforeach
									@endif
								</ul>
							</div>
						</div>
						<script type="text/javascript">
							function bannerClicks(id_banner, id_slider){
								var click_url = 'http://www.surgiwear.co.in/bannerslider/index/click/';
								banner_id = id_banner;
								new Ajax.Request(click_url,{
									method: 'post',
									reverse:true,
									parameters:{id_banner: banner_id, slider_id:id_slider},
									onFailure: '',
									onSuccess: ''
								});
							}
						</script>
					</div>
				</div>
				<div class="magestore-bannerslider">
					<div class="magestore-bannerslider-standard">
						<div class="bannerslide-default-slider home_bottom_gallery">
							<div class="slider1-4" >
								<div class="home_bottom_image">
									<a style="padding-left:0;" href="javascript:void(0)" target="_self" onclick="bannerClicks('5','4')">
										<img src="{{ asset('frontassets/images/bannerslider/hydrocephalous-shunt-systems.png') }}" title="Hydrocephalous-Shunt-Systems" alt="medical equipment" width="400" height="200" />
										<h4>Hydrocephalous-Shunt-Systems</h4>
									</a>
								</div>
								<div class="home_bottom_image">
									<a href="javascript:void(0)" target="_self" onclick="bannerClicks('6','4')">
										<img src="{{ asset('frontassets/images/bannerslider/bone-grafting-products.png') }}" title="Bone-Grafting-products" alt="optimize" width="400" height="200" />
										<h4>Bone-Grafting-products</h4>
									</a>
								</div>
								<div class="home_bottom_image">
									<a style="padding-right:0;" href="javascript:void(0)" target="_self" onclick="bannerClicks('7','4')">
										<img src="{{ asset('frontassets/images/bannerslider/disposable-drapes.png') }}" title="Disposable-Drapes" alt="medical equipment manufacture" width="400" height="200" />
										<h4>Disposable-Drapes</h4>
									</a>
								</div>
								<div class="home_bottom_image">
									<a style="padding-left:0;" href="javascript:void(0)" target="_self" onclick="bannerClicks('10','4')">
										<img src="{{ asset('frontassets/images/bannerslider/dressings.png') }}" title="Dressings" alt="medical equipment " width="400" height="200" />
										<h4>Dressings</h4>
									</a>
								</div>
							</div>
						</div>
					</div>    
				</div>
				<div class="page-title">
					<h1> Shop Online Surgical Instruments</h1>
				</div>
				<div class="std row">
					<h1 style="text-align: center;"><span style="font-size: xx-large;"><strong>WELCOME TO SURGIWEAR</strong></span></h1>
					<p style="text-align: center;"><strong><span style="font-size: x-large; font-family: georgia, palatino; color: #333333;">An Indian surgical company that delivers life changing solutions through innovative products and services for the healthcare professionals</span></strong></p>
					<p style="font-family: 'times new roman', times; background-image: url('public/frontassets/images/pic5.jpg');"><span style="font-size: x-large; font-family: georgia, palatino;"><span style="font-family: 'times new roman', times;">In the year 1982 SURGIWEAR was established by Dr. GD Agrawal, for manufacturing of surgical implants and disposable drapes to supply in the global market. His single minded devotion to work, &nbsp;vast knowledge and &nbsp;good business ethics become a popular name in surgical   world. </span></span><br /> <span style="font-family: 'times new roman', times; background-image: url('public/frontassets/images/pic5.jpg');"><span style="font-size: x-large; font-family: georgia, palatino;"><span style="font-family: 'times new roman', times;">SURGIWEAR is the Indian manufacturer of surgical <br /> products, strives to produce &amp; supply the latest <br />and most comprehensive range of surgical <br /> implants and disposable drapes. </span></span><br /> <span style="font-family: 'times new roman', times; background-image: url('public/frontassets/images/pic5.jpg');"><span style="font-size: x-large; font-family: georgia, palatino;"><span style="font-family: 'times new roman', times;">Today SURGIWEAR is well known by <br /> plenty of doctors all over the world <br /> and the aim of our company is to assist <br /> the medical world with the best of <br /> its ability and caliber.</span><br /></span></span></span></p>
					<p style="text-align: center;"><img src="http://www.surgiwear.co.in/media/wysiwyg/shado.gif" alt="" class="img-responsive" /></p>
					<p>&nbsp;</p>
					<p style="text-align: center;"><span style="font-size: xx-large; font-family: georgia, palatino; color: #333333;"><strong>Surgiwear is an innovative company, creating new products to drive growth for established business segment</strong></span></p>
					<p>&nbsp;</p>
					<div id="first-slider">
						<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
							<ol class="carousel-indicators">
								<li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active slide1"><img src="{{ asset('frontassets/images/pic1.jpg') }}" alt="" /></div>
								<div class="item slide2"><img src="{{ asset('frontassets/images/pic2.jpg') }}" alt="" /></div>
								<div class="item slide3"><img src="{{ asset('frontassets/images/pic3.jpg') }}" alt="" /></div>
								<div class="item slide4"><img src="{{ asset('frontassets/images/pic4.jpg') }}" alt="" /></div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<em class="fa fa-angle-left"></em>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<em class="fa fa-angle-right"></em>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
<script type="text/javascript" src="{{ asset('frontassets/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/js/jquery.flexisel.js') }}"></script>
<script>  
	jQuery(window).load(function() {
		jQuery("#flexiselDemo5").flexisel({
			visibleItems: 1,
			animationSpeed: 1000,
			autoPlay:true,
			autoPlaySpeed: 3000,            
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 1
				},
				tablet: { 
					changePoint:768,
					visibleItems: 1
				}
			}
		});
	});
	
	jQuery('#carousel-9-3').flexslider({
		animation: "slide",
		controlNav: true,
		animationLoop: true,
		slideshow: false,
		itemWidth: 160,
		itemMargin: 5,
		asNavFor: '#slider-9-3'
	});

	jQuery('#slider-9-3').flexslider({
		animation: "fade",
		controlNav: false,
		animationLoop: false,
		slideshow: true,
		slideshowSpeed: 3500,
		pauseOnHover: false,
		pausePlay: false,

	});
	
</script>
@endsection