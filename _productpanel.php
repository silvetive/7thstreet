<?
if (isset($product_id)) {
	switch ($product_id) {
		case '100001':
		// $product_img = 'p_100001_01.jpg';
		break;
		
		default:

		break;
	}
}

$maxitem = 3;
?>

<div class="product-panel">
	<div class="product-slideimg" data-product-id="<?php echo $product_id ?>" data-product='<?php echo $product_id ?>' data-slide='1' data-slidemax='<?php echo $maxitem ?>' onclick="SlideImagePanel(<?php echo $product_id ?>,'r')">
		<div class="product-prev" onclick=""><div class="fa fa-angle-left"></div></div>
		<div class="product-next" onclick=""><div class="fa fa-angle-right"></div></div>
		<div class="product-imgroll">
			<?php
			for ($i=1; $i <= $maxitem; $i++) { 
				// $imgn = '01';
				$imgn = str_pad($i, 2, "0", STR_PAD_LEFT);
				echo "<div class='product-img' style='background-image: url(\"image/product/p_".$product_id."_".$imgn.".jpg\");'></div>";
			}
			?>
		</div>
	</div>
	<div class="product-info">
		<div class="product-name">
			PRODUCT NAME (#ST1021)
		</div>
		<div class="product-data">
			<div class="product-colors">
				<?php
				for ($i=1; $i <= $maxitem; $i++) { 
					echo "<div class='product-color' style='background-color: #BBB' onclick=\"SlideImagePanel('".$product_id."','".$i."')\"><div style='border-right-color: #888;'></div></div>";
				}
				?>
			</div>
			<div class="product-price">
				790 <span>THB</span>
			</div>
		</div>
		<div class="product-button">
			<div class="viewdetail">VIEW</div>
			<div class="addtocart"><span class="fa fa-shopping-cart"></span> ADD TO CART</div>
		</div>
	</div>
</div>