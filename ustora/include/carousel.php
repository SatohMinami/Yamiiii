
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<?php
					$sql="SELECT * FROM carousel";
					$result_list=mysqli_query($con,$sql);
					while($rowList=mysqli_fetch_assoc($result_list)){
					?>
					<li>
						<img src="admin/image_carousel/<?php echo $rowList['IMG']; ?> " alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								<span class="primary text-rigth" ><?php echo $rowList['Noi_Dung']; ?></span>
							</h2>
							<a class="caption button-radius" target="_blank" href="<?php echo $rowList['Link']; ?>"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<?php 
                    	}
                 	?>
				</ul>
			</div>
			
			<!-- ./Slider -->
    </div> <!-- End slider area -->
