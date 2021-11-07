<article class="content-wrapper" id="pid-<?php echo $post->ID; ?>">
	<?php

	if(is_home()) {

		echo '<a href="' . $post->guid . '">';

			the_title('<h3>', '</h3>');
			
		echo '</a>';

	} 

	the_content();

	?>

</article>