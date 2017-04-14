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
	<link rel="stylesheet" media="screen" href="css/style_index.css">

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
	<section id="headbanner">
		<div id="sld-01">
			<div class="sld-obj-a">
				LET’S FIND YOUR WAY<br>
				WITH THE NEW WEAR
				<p>
					NEW AGE STREET BRAND FOR<br>
					COVER ALL
				</p>
				<div class="sld-btn">SHOP NOW</div>
			</div>
			<div class="sld-bg"></div>
		</div>
	</section>
	<div class="clear"></div>
	<section id="intro">
		<div class="intro-img big">
			<div style="background-image: url('image/intro/intro_01.jpg');"></div>
		</div>
		<div class="intro-img big">
			<div style="background-image: url('image/intro/intro_02.jpg');"></div>
		</div>
		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_03.jpg');"></div>
		</div>
		<div class="intro-img big">
			<div style="background-image: url('image/intro/intro_04.jpg');"></div>
		</div>
		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_05.jpg');"></div>
		</div>

		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_06.jpg');"></div>
		</div>
		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_07.jpg');"></div>
		</div>
		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_08.jpg');"></div>
		</div>
		<div class="intro-img">
			<div style="background-image: url('image/intro/intro_09.jpg');"></div>
		</div>
	</section>
	<div class="clear"></div>
	<section id="showcase">
		<div class="row">
			<div class="col-xs-12 col-md-6 showcase-label">NEW ARRIVAL</div>
			<div class="col-xs-12 col-md-6 showcase-tabs">
				<div class="showcase-tab active" onclick="ShowcaseTab(this,'1')">MENS</div>
				<div class="showcase-tab" onclick="ShowcaseTab(this,'2')">WOMEN</div>
				<div class="showcase-tab" onclick="ShowcaseTab(this,'3')">ACCESSORIES</div>
			</div>
			<div class="col-xs-12 showcase-display">
				<div class="col-xs-12 col-md-3 showcase-side">
					<div class="col-xs-12">
						<?php $product_id = '100001'; include '_productpanel.php' ?>
					</div>
					<div class="col-xs-12"><?php $product_id = '100002'; include '_productpanel.php' ?></div>
				</div>
				<div class="col-xs-12 col-md-6 product-present">
					<div class="col-xs-12"><div></div></div>
				</div>
				<div class="col-xs-12 col-md-3 showcase-side">
					<div class="col-xs-12"><?php $product_id = '100003'; include '_productpanel.php' ?></div>
					<div class="col-xs-12"><?php $product_id = '100004'; include '_productpanel.php' ?></div>
				</div>
			</div>
			<div class="col-xs-12 showcase-display showcase-bottom">
				<div class="col-xs-12 col-md-3"><?php $product_id = '100005'; include '_productpanel.php' ?></div>
				<div class="col-xs-12 col-md-3"><?php $product_id = '100006'; include '_productpanel.php' ?></div>
				<div class="col-xs-12 col-md-3"><?php $product_id = '100007'; include '_productpanel.php' ?></div>
				<div class="col-xs-12 col-md-3"><?php $product_id = '100008'; include '_productpanel.php' ?></div>
			</div>
		</div>
	</section>
	<section id="article-content">
		<div class="content-spotlight row nomargin">
			<div class="col-xs-12 col-md-6" style="position:relative ;background-image: url('image/article/article_01.jpg');">
				<div class="abso" style="background-size: contain; background-position: bottom; background-image: url('image/article/article_01a.png');"></div>
			</div>
			<div class="col-xs-12 col-md-6" style="position:relative ;background-image: url('image/article/article_02.jpg');">
				<div class="abso" style="background-size: contain; background-position: bottom; background-image: url('image/article/article_02a.png');"></div>
			</div>
		</div>
		<div class="content-list">
			<div class="ig-stage">
				<div class="ig-rail" data-stagegroup='ig' data-stagenum='2'>

					<?php

					$train_start = 3;
					$train_perset = 3;
					$train_max = 9;

					$train_counter = 0;
					$train_trainlength = 0;
					$train_fadein = '';

						// TEMP
					$train_currentimg = $train_start;
					$train_maximg = 7;

					?>


					<div class="ig-btn prev" onclick="MoveTrainIG('ig3','L','<?php echo $train_perset ?>',75)"></div>
					<div class="ig-btn next" id="contentreadmore" onclick="MoveTrainIG('ig3','R','<?php echo $train_perset ?>',75)">
						<div>M<br>O<br>R<br>E</div>
					</div>
					<?php

					echo "<div class=\"ig-train\" data-trainname='ig3'>";
					for ($pt = $train_start; $pt < 15; $pt++) { 

						if ($train_currentimg > $train_maximg) {
							$train_currentimg = $train_start;
						}
						if ($train_counter < $train_perset) {
							$train_fadein = 'fadein';
						} else {
							$train_fadein = '';
						}

						$imgn = str_pad($train_currentimg, 2, "0", STR_PAD_LEFT);

						if ($pt == $train_start) {
							echo "<div class='gallery-group gallery-firstgap'>";
							echo "<div class='gallery-img'><div style='background-color:#525254'></div>";
							echo "</div></div>";
						} else {
							echo "<div class='gallery-group noselect ".$train_fadein."'>";
							$train_counter += 1;

							echo "<div class='gallery-img'>";
							echo "<div style='background-image: url(image/article/article_".$imgn.".jpg);'></div>";
							echo "</div>";
							echo "<div class='gallery-label'>";
							echo "CAN’T FULL ENJOY LIFE WITHOUT GOOD WEAR";
							echo "</div>";
							echo "<div class='gallery-readsign'>READ</div>";
							echo "<div class='gallery-date'>7 january 2017</div>";

							$imgn++;
							$train_currentimg++;
							if ($imgn > 3) {
								$imgn = 1;
							}

							echo "</div>";
						}
					}
					$train_trainlength = floor($train_counter / $train_perset)+1;

					echo "<div id='trainigdata' data-trainlength='".$train_trainlength."' data-station='1'></div>";

					echo "</div>";
					echo "<div class='indicators' data-indicator='ig3'>";
					for ($k=0; $k < $train_trainlength; $k++) { 
						$active = ($k == 0 ? ' active' : '');
						echo "<div class='indicator".$active."' data-indicatornum='".($k+1)."'><div></div></div>";
					}
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>
<section id="storedistributor">
	<div class="storedistributor-stage row nomargin">
		<div class="storedistributor-text col-xs-12 col-md-8">
			<div class="storedistributor-label">
				MORE INFO LOCATED OF OUR<br>
				STORE DISTRIBUTOR IN THAILAND / OTHER
			</div>
			<div class="storedistributor-btn">
				FIND STORE
			</div>
		</div>
		<div class="storedistributor-img col-xs-12 col-md-4 hidden-xs">

		</div>
	</div>
</section>


<section id="instagram" class="hidden-xs hidden-sm">
	<div class="instagram-label">
		#MOVINGFORWORD  #7THSTREETLIFE
		<p>
			All speacial gallery and the hashtag by our 7thStreet fans
			you can join this let’s hashtag on your social  
		</p>
	</div>
	<div class="ig-stage">
		<div class="ig-rail" data-stagegroup='ig' data-stagenum='2'>

			<?php

			$train_start = 1;
			$train_perset = 4;
			$train_max = 16;

			$train_counter = 0;
			$train_trainlength = 0;
			$train_fadein = '';

						// TEMP
			$train_currentimg = $train_start;
			$train_maximg = 10;

			?>


			<div class="ig-btn prev" onclick="MoveTrainIG('ig2','L','<?php echo $train_perset ?>',80)"></div>
			<div class="ig-btn next" id="contentreadmore" onclick="MoveTrainIG('ig2','R','<?php echo $train_perset ?>',80)">
				<div>M<br>O<br>R<br>E</div>
			</div>
			<?php

			echo "<div class=\"ig-train\" data-trainname='ig2'>";
			for ($pt = $train_start; $pt <= $train_max; $pt++) { 

				if ($train_currentimg > $train_maximg) {
					$train_currentimg = $train_start;
				}
				if ($train_counter < $train_perset) {
					$train_fadein = 'fadein';
				} else {
					$train_fadein = '';
				}

				$imgn = str_pad($train_currentimg, 2, "0", STR_PAD_LEFT);

				if ($pt == $train_start) {
					echo "<div class='gallery-group gallery-firstgap'>";
					echo "<div class='gallery-img'><div style='background-color:#525254'></div>";
					echo "</div></div>";
				} else {
					echo "<a class='gallery-group ".$train_fadein."' href='https://www.instagram.com/7th_street_brand/'>";
					$train_counter += 1;

					echo "<div class='gallery-img'>";
					echo "<div style='background-image: url(image/instagram/ig_".$imgn.".jpg);'></div>";
					echo "</div>";

					$imgn++;
					$train_currentimg++;
					if ($imgn > 3) {
						$imgn = 1;
					}

					echo "</a>";
				}
			}
			$train_trainlength = floor($train_counter / $train_perset)+1;

			echo "<div id='trainigdata' data-trainlength='".$train_trainlength."' data-station='1'></div>";

			echo "</div>";
			echo "<div class='indicators' data-indicator='ig2'>";
			for ($k=0; $k < $train_trainlength; $k++) { 
				$active = ($k == 0 ? ' active' : '');
				echo "<div class='indicator".$active."' data-indicatornum='".($k+1)."'><div></div></div>";
			}
			?>
		</div>
		<div class="clear"></div>
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
	function MoveTrainIG(iggroup,direction,unitperset,movesize) {
		train = $("*[data-trainname='"+iggroup+"']");
		station = train.children('#trainigdata').attr('data-station');
		trainlength = train.children('#trainigdata').attr('data-trainlength');

		endstation = parseInt(trainlength);
		// train_current = ('.tmn-train').css('transform');
		if (direction == 'L' && station != 1) {
			nextstation = parseInt(station)-1;
		} else if (direction == 'R' && station < endstation) {
			nextstation = parseInt(station)+1;
			// alert(station+" "+endstation);
		} else {
			return false;
		}
		train.children('#trainigdata').attr('data-station',nextstation);
		nextstation_position = ((nextstation-1)*(-movesize))+"%";
		train.css('transform','translateX('+nextstation_position+')');

		$(".indicators[data-indicator='"+iggroup+"']").children('.indicator').removeClass('active');
		$(".indicators[data-indicator='"+iggroup+"']").children(".indicator[data-indicatornum='"+nextstation+"']").addClass('active');

		fadein_start = ((nextstation * unitperset) - unitperset) + 2;
		fadein_end = (nextstation * unitperset) + 1;
		// console.log(fadein_start+"-"+fadein_end);

		$("*[data-trainname='"+iggroup+"'] .gallery-group").removeClass('fadein');
		$("*[data-trainname='"+iggroup+"'] .gallery-group:nth-child(n+"+fadein_start+'):nth-child(-n+'+fadein_end+')').each(function(){
			$(this).addClass('fadein');
		})

		MoveTrainIGLastPage(iggroup,nextstation,trainlength);
	}
	function MoveTrainIGLastPage(iggroup,nextstation,trainlength){
		console.log(nextstation+" "+trainlength);
		if (nextstation == trainlength) {
			$("*[data-trainname='"+iggroup+"'] #contentreadmore").addClass('active');
		} else {
			$("*[data-trainname='"+iggroup+"'] #contentreadmore").removeClass('active');
		}
	}
</script>
<script type="text/javascript">
	function ShowcaseTab(abc,catnum){
		var theclass = $(abc).attr('class');
		$('.'+theclass).removeClass('active');
		$(abc).addClass('active');
	}
</script>
</html>