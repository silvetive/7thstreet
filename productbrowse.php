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
	<link rel="stylesheet" media="screen" href="css/style.css">
	<link rel="stylesheet" media="screen" href="css/style_productbrowse.css">

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
	include '_navbar.php';
	?>
	<section id="productbrowse-headline">
		<div class="headline-label">
			<div class="breadcomp">
				<a href="index">HOME</a> / <span>MENS</span>
			</div>
			<div>
				7TH MENS WARE
			</div>
		</div>
	</section>
	<section id="productbrowse-panel">
		<div class="panel-filter-btn noselect" onclick="FilterActive();"><span class="fa fa-filter"></span> filter</div>
		<div class="panel-sorting">
			<span class="custom-dropdown custom-dropdown--red custom-dropdown--large">
				<span>Sort by</span>
				<select class="custom-dropdown__select custom-dropdown__select--red">
					<option>Newest</option>
					<option>Price : High</option>
					<option>Price : Low</option>
				</select>
			</span>
		</div>
		<div class="panel-filter <?php echo ( isset($_GET['filter']) ? "active" : ""); ?>">
			<div>
				<div class="filter-menu">
					<div class="menu-name" data-toggle="collapse" data-target="#filtercatagory" aria-expanded="true">
						<label>SUB CATAGORIES</label><span class="fa fa-plus"></span>
					</div>
					<div id="filtercatagory" class="menu-choice collapse" aria-expanded="true">
						<ul>
							<li>ALL (675)</li>
							<li>T-SHIRT  (195)</li>
							<li>LONG SLEEVE SHIRT  (45)</li>
							<li>SHIRT  (12)</li>
							<li>POLO  (20)</li>
							<li>JOGGER PANT  (6)</li>
							<li>COLORFULL  (8)</li>
							<li>V COLLECTION  (15)</li>
						</ul>
					</div>
				</div>
				<div class="filter-menu">
					<div class="menu-name">
						<label>COLOR</label><span class="fa fa-plus"></span>
					</div>
					<div class="menu-choice product-color-list" style="line-height: 30px; text-align: left;">
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #FFF;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #000'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #6C6D70;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #FFF;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #000'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #6C6D70;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #FFF;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #000'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #6C6D70;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #FFF;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #000'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #6C6D70;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #FFF'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
						<div class="product-color" title='COLOR'>
							<div class="product-color-main" style='background-color: #6C6D70'>
								<div class="product-color-sub" style='border-right-color: #000;'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="productbrowse-stage" class="<?php echo ( isset($_GET['filter']) ? "filter-active" : ""); ?>">
		<ul id="posts" class="row nomargin">
		</ul>
		<div id="loading">
			<img src="image/store.jpg" alt="Loading…" />
		</div>
	</section>
	<?
	include '_footer.php';
	?>
	<!-- <div id="viewpointmarker" style="position: absolute; height: 3px; width: 3px; background-color: red;"></div> -->
</body>


<script type="text/javascript">
	debugbox = "<div id='debugbox' style='position:fixed; top:5px; left:5px;background-color:rgba(0,0,0,0.3);color:red;z-index:2000;'></div>"
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').append( debugbox );
	})
	$(window).on('scroll', function(){
		IndexProductViewpointDetail();
	});
</script>
<script src="libra/smoothscroll/smoothscroll.js"></script>
<script type="text/javascript">
	function BackToTop(){
		window.scroll({ top: 0, left: 0, behavior: 'smooth' });
		// document.querySelector('#navbar').scrollIntoView({ behavior: 'smooth' });
	}
</script>

<script type="text/javascript">
	function SlideImagePanel(product_id,direction){
		if (direction == 'r') {
			$slidep = $(".product-slideimg[data-product='"+product_id+"']").attr('data-slide')
			// console.log($slidep);
			$slidep++;
			if ($slidep > $(".product-slideimg[data-product='"+product_id+"']").attr('data-slidemax')) {
				$slidep = 1;
			}
			$(".product-slideimg[data-product='"+product_id+"']").attr('data-slide',$slidep);
		} else {
			$(".product-slideimg[data-product='"+product_id+"']").attr('data-slide',direction);
		}
	}
	function IndexProductViewpointDetail(){
		var window_offset_t = $(window).scrollTop();
		var viewpoint =  window_offset_t+($(window).innerHeight()/2);
		$('#viewpointmarker').css('top',viewpoint);
		$('.product-panel').each(function(){
			var paneltop = $(this).offset().top;
			var panelbottom = paneltop + $(this).innerHeight();
			if(viewpoint > paneltop && viewpoint < panelbottom){
				$(this).addClass('in-viewpoint');
			} else {
				$(this).removeClass('in-viewpoint');
			}
		})
	}
</script>
<script type="text/javascript">
	var current_item = 0;
	var pid_dummy = ["100001","100002","100003","100004","100005","100006","100007"];
	$(document).ready(function() {
		var win = $(window);
		for (var i = 0; i < 12; i++) {
			InsertProduct(current_item);
			current_item++;
			if (current_item >= pid_dummy.length) {
				current_item = 0;
			}
		}
		win.scroll(function() {
			if ($(document).height() - win.height() == win.scrollTop()) {
				$('#loading').show();
				for (var i = 0; i < 4; i++) {
					InsertProduct(current_item);

					current_item++;
					if (current_item >= pid_dummy.length) {
						current_item = 0;
					}
				}
			}
		});
	});
</script>
<script type="text/javascript">
	function InsertProduct(){
		$.ajax({
			url: '_productload.php',
			dataType: 'html',
			type: 'POST',
			data: {pid : pid_dummy[current_item]},
			success: function(html) {
				$('#posts').append("<div class='col-xs-3'>"+html+"</div>");
				$('#loading').hide();
			}
		});
	}
</script>
<script type="text/javascript">
	function FilterActive() {
		$('.panel-filter').toggleClass('active');
		$('#productbrowse-stage').toggleClass('filter-active');
	}
</script>
</html>