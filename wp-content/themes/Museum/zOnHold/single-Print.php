<?php get_header(); ?>

<?php //get_sliderSlim(); ?>

	<div id="content" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	
		<div <?php post_class("singleLayout") ?> id="post-<?php the_ID(); ?>">
			<div id="postHead">				
				<?php the_post_thumbnail(array(960,500)); ?>
			</div>
			<h2><?php single_post_title(); ?></h2>
			<div class="meta"><?php the_time('M j, Y ') ?> / 
				<?php if (in_category('Print')) : ?> <a href="/category/print/">Print</a> <?php endif; ?> / 
				<?php the_tags( '', '', ''); ?> 
				<?php // comments_number('0','1','%'); ?>
			</div>

			<div class="entry">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				
			</div>
			
		</div>
		
		<?php comments_template(); ?>
			
		<?php endwhile; else: ?>
	
			<p>Sorry, no posts matched your criteria.</p>
	
		<?php endif; ?>

	</div>

<?php //get_quickEventList(); ?>

<?php get_footer(); ?>
