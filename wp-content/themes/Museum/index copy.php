<?php get_header(); ?>

<?php get_slider(); ?>

	<div id="content" class="wideColumn" role="main">
		<h5>At the Crossroads</h5>
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<ul class="postInfo">
						<li class="commentBubble"><?php comments_popup_link('0', '1', '%'); ?></li> 
						<li><?php the_time('M j, Y ') ?></li>
						<li> by <?php the_author() ?></li>
					</ul>
	
					<div class="entry">
						<?php the_content('Read more'); ?>
					</div>
	
					<p class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?> 
						Posted in <?php the_category(', ') ?> | 
						<?php edit_post_link('Edit', ''); ?>  
					</p>
				</div>
	
			<?php endwhile; ?>
	
		<?php else : ?>
	
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
	
		<?php endif; ?>

	</div><!-- End Content -->

<?php get_quickEventList(); ?>

<?php get_footer(); ?>
