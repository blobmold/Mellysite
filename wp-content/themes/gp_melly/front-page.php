<?php get_header(); ?>

<?php if (is_front_page()) : ?>

	<div class="slider">
		<ul class="slider-img-container">
			<li>
				<img class="activeSlide" src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/244750616_168276035502771_6409375422784688851_n.jpg" alt="">
			</li>
			<li>
				<img src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/245240817_398871868387784_2811033865160995141_n.jpg" alt="">
			</li>
			<li>
				<img src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/245545430_201802038618412_4377693767970669257_n.jpg" alt="">
			</li>
			<li>
				<img src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/245884802_1534724693536188_4586505408280859847_n.jpg" alt="">
			</li>
			<li>
				<img src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/246496156_1051388149025019_5515914918182129235_n.jpg" alt="">
			</li>
			<li>
				<img src="http://localhost:8888/Mellys-website/wp-content/uploads/2021/10/240555281_541142337137998_4914979041224989276_n.jpg" alt="">
			</li>
		</ul>
		<div class="dots"></div>
		<div class="arrows">
			<div id="prevarrow" class="prevarrow">&#5176;</div>
			<div id="nextarrow" class="nextarrow">&#5171;</div>
		</div>
	</div>
	<?php ?>

<?php endif; ?>

<?php get_footer(); ?>