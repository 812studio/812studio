<?php get_header(); ?>

<?php //get_sliderSlim(); ?>

	<div id="content" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div <?php post_class("singleLayout") ?> id="post-<?php the_ID(); ?>">
			<div id="postHead">
				<?php the_post_thumbnail(array(960,500)); ?>
			</div>
			
			
					
			<div id="metaSpace">
				<div class="meta">
					<p><?php the_time('M j, Y ') ?> <a href="#respond"><?php comments_number('0','1','%'); ?><span class="lilArrow"></span></a></p>
					<?php //get_estReadTime(); ?>
				</div>
			</div>
			
			<div class="entry">
				<h2><?php single_post_title(); ?></h2>
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
			</div>
			
		</div>
		
		<?php get_navigation(); ?>
		
		<?php comments_template(); ?>
			
		<?php endwhile; else: ?>
	
			<p>Sorry, no posts matched your criteria.</p>
	
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
