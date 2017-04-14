
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