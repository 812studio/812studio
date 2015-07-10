<div id="sidebar" role="complementary">
	<h5>Info</h5>
	
	<div id="presenterInfo">
		<?php if ( function_exists('has_post_thumbnail') and has_post_thumbnail() ) : ?>
			
	            <a href="<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); echo $thumbnail[0]; ?>">
					<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
				</a>
	    <?php endif; ?>
	</div>
	
</div>