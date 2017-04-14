<!DOCTYPE html>
<html lang="en">
<head>
	<title>7th Street</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="Description" content="">
	<meta name="keywords" content="">

	<link rel='icon' href='image/favicon.png' sizes="32x32">
	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="libra/bootstrap/bootstrap.css">
	<link rel="stylesheet" media="screen" href="libra/fontawesome/css/font-awesome.min.css">

	<link rel="stylesheet" media="screen" href="css/sivan.css">
	<link rel="stylesheet" media="screen" href="css/style_demo.css">
	<link rel="stylesheet" media="screen" href="css/style_demo_index.css">

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="libra/bootstrap/bootstrap.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- <div class="demo"></div> -->
	<?
	// include '_navbar.php';
	?>
	<?
	include '_navbar_demo.php';
	?>
	<div class="clear"></div>
	<section id="instagram">

	</section>
	<section id="headbanner" onclick="SlideASwitch()">
		<div class="banner-display">
			<div class="banner slide-a-set" data-slideset='1'></div>
			<div class="banner slide-a-set" data-slideset='2'><div class="slide-obj-a"></div></div>
			<div class="banner slide-a-set" data-slideset='3'></div>
			<div class="bannerbg"></div>
		</div>
	</section>
	<div class="clear"></div>
	<section id="intro">
		<div></div>
		<!-- <div class="intro-a">
			<div class="row nomargin">
				<div class="col-xs-12 nopadding" style="margin-bottom: 8px;">
					<div class="intro-max col-xs-4" style="background-image: url('image/intro/it_01.jpg'"></div>
					<div class="col-xs-2 nopadding">
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_02.jpg'"></div>
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_03.jpg'"></div>
					</div>
					<div class="intro-max col-xs-6" style="background-image: url('image/intro/it_04.jpg'"></div>
				</div>
				<div class="col-xs-12 nopadding">
					<div class="col-xs-2"></div>
					<div class="col-xs-3 nopadding">
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_05.jpg'"></div>
					</div>
					<div class="col-xs-2 nopadding">
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_06.jpg'"></div>
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_07.jpg'"></div>
					</div>
					<div class="intro-max col-xs-3" style="background-image: url('image/intro/it_08.jpg'"></div>
					<div class="col-xs-2 nopadding">
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_09.jpg'"></div>
						<div class="intro-min col-xs-12" style="background-image: url('image/intro/it_10.jpg'"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro-b">
			<div></div>
		</div>
		<div class="intro-c">
			<div class="row">
				<div class="intro-box col-xs-12 ">
					<div class="col-xs-3"></div>
					<div class="intro-img col-xs-3" style="background-image: url('image/intro/it_b01.jpg');padding-top: 20%;"></div>
				</div>
				<div class="intro-box col-xs-5 ">
					<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b02.jpg');padding-top: 130%;"></div>
				</div>
				<div class="col-xs-7 nopadding">
					<div class="intro-box col-xs-4 ">
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b03.jpg');padding-top: 170%;"></div>
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b04.jpg');padding-top: 170%;"></div>
					</div>
					<div class="intro-box col-xs-4 ">
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b05.jpg');padding-top: 80%;"></div>
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b06.jpg');padding-top: 160%;"></div>
					</div>
					<div class="intro-box col-xs-4 ">
						<div class="col-xs-12" style="padding-top: 90%;"></div>
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b07.jpg');padding-top: 90%;"></div>
						<div class="col-xs-12" style="padding-top: 90%;"></div>
						<div class="intro-img col-xs-12" style="background-image: url('image/intro/it_b08.jpg');padding-top: 90%;"></div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="clear"></div>
	</section>
	<div class="clear"></div>
	<section id="slide-b" onclick="SlideBSwitch()">
<!-- 		<div class="slide-b-set" data-slideset="1">
			<div class="newhoodie-text" style="background-image: url('image/slide_b/sld_00a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div> -->
<!-- 		<div class="slide-b-set" data-slideset="2">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_01a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div> -->
<!-- 		<div class="slide-b-set" data-slideset="3">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_02a.png');"></div>
			<div class="slide-obj-b" style="background-image: url('image/slide_b/sld_02b.png');"></div>
			<div class="slide-obj-c" style="background-image: url('image/slide_b/sld_02c.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div> -->
<!-- 		<div class="slide-b-set" data-slideset="4">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_03a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div> -->
		<div class="slide-b-set" data-slideset="1">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_04a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div>
		<div class="slide-b-set" data-slideset="2">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_06a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div>
		<div class="slide-b-set" data-slideset="3">
			<div class="slide-obj-a" style="background-image: url('image/slide_b/sld_07a.png');"></div>
			<a class="gotofacebook" href="https://www.facebook.com/7thStreetBrand/">
				<div><span>GO TO</span> Facebook</div>
			</a>
		</div>
	</section>
	<section id="storedistributor">
		<div class="storedistributor-stage row nomargin">
			<div class="storedistributor-text col-xs-12 col-md-8">
				<div class="storedistributor-label">
					MORE INFO LOCATED OF OUR<br>
					STORE DISTRIBUTOR IN THAILAND / OTHER
				</div>
				<a class="storedistributor-btn" href="store">
					FIND STORE
				</a>
			</div>
			<div class="storedistributor-img col-xs-12 col-md-4 hidden-xs">

			</div>
		</div>
	</section>
	<?
	include '_footer_demo.php';
	?>
	<?
	// include '_footer.php';
	?>
</body>


<script type="text/javascript">
	debugbox = "<div id='debugbox' style='position:fixed; top:5px; left:5px;background-color:rgba(0,0,0,0.3);color:red;z-index:2000;'></div>"
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').append( debugbox );
		SlideA();
		SlideB();
	})
	$(window).on('scroll', function(){
		BannerLayering();
	});
</script>
<script src="libra/smoothscroll/smoothscroll.js"></script>
<script type="text/javascript">
	function BackToTop(){
		window.scroll({ top: 0, left: 0, behavior: 'smooth' });
		// document.querySelector('#navbar').scrollIntoView({ behavior: 'smooth' });
		console.log('ok');
	}
</script>
<script type="text/javascript">
	function BannerLayering() {
		// if(timer) {
			// window.clearTimeout(timer);
		// }
		// timer = window.setTimeout(function() {
			var banner_offset_t = $('#headbanner').offset().top;
			var banner_inner_h = $('#headbanner').innerHeight();
			var max_point = (banner_offset_t+banner_inner_h);
			var window_offset_t = $(window).scrollTop();


			var banner_blur = 0;
			// var banner_mg_bt = Math.floor(window_offset_t/20)*20;
			var banner_mg_bt = window_offset_t;
			if (window_offset_t > max_point) {
				banner_mg_bt = (banner_inner_h/2.1);
				banner_blur = 0;
			} else {
				banner_blur = (window_offset_t/100);
			}

			// $('#debugbox').html(banner_offset_t+" "+banner_inner_h+" "+max_point+" "+window_offset_t+" "+banner_mg_bt);

			// $('#headbanner').css('height', "calc(36vw - "+banner_mg_bt+"px)");
			// $('#headbanner').css('filter', 'blur('+banner_blur+'px)');
			$('.banner-display').css('transform', "translateY("+(banner_mg_bt*0.5)+"px)");
		// }, 100);
	}

	var slideset_a_max = 3;
	var slideset_b_max = 3;
	var slideset_a = Math.floor((Math.random() * slideset_a_max) + 1);
	var slideset_b = Math.floor((Math.random() * slideset_b_max) + 1);
	function SlideA() {
		SlideASwitch(slideset_a);
		timer = setInterval(function(){
			SlideASwitch();
		}, 4000);
	}
	function SlideB() {
		SlideBSwitch(slideset_b);
		// timer = setInterval(function(){
		// 	SlideBSwitch();
		// }, 4000);
	}
	function SlideASwitch(n){
		if (n == null) {
			slideset_a++;
			if (slideset_a > slideset_a_max) {
				slideset_a = 1;
			}
		}
		$('.slide-a-set').removeClass('active');
		$('.slide-a-set[data-slideset="'+slideset_a+'"]').addClass('active');

	}
	function SlideBSwitch(n){
		if (n == null) {
			slideset_b++;
			if (slideset_b > slideset_b_max) {
				slideset_b = 1;
			}
		}
		$('.slide-b-set').removeClass('active');
		$('.slide-b-set[data-slideset="'+slideset_b+'"]').addClass('active');

	}
</script>

</html>