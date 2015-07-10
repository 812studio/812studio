<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<div id="content" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class("singleLayout fire2") ?> id="post-<?php the_ID(); ?>">
			<div id="postHead">
				<?php the_post_thumbnail(array(960,500)); ?>
			</div>
			
			
					
			<div id="metaSpace">
				<div class="meta">
					<p><?php the_time('M j, Y ') ?></p>
					<?php get_estReadTime(); ?>
				</div>
			</div>
			
			<div class="entry">
				<h2><?php single_post_title(); ?></h2>
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
			</div>
			
		</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
		<?php //comments_template(); ?>
	
	</div>



<?php get_footer(); ?>
