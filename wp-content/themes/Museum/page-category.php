<?php
/*
Template Name: Categories
*/
?>

<?php get_header(); ?>

<div id="work">
	<h2><?php the_title(); ?></h2>
	<h2>Recent Writing</h2>
	
	<ul>
	
	<?php if (in_category('Writing')); ?> 
	
	
		<?php query_posts('category_name=writing'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			
		<li>
			<div class="meta">
				<?php the_time('M j, Y ') ?>
				<?php comments_number('0','1','%'); ?>
			</div>
			
			<div class="content">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php global $more; $more = 0; ?>
				<?php the_content('Check it out &raquo;'); ?>
				<?php get_estReadTime(); ?>
				
				<?php echo get_the_term_list($post->ID, 'client', '', ', ', ''); ?>
			</div>
			<div class="image">
				<a class="recentThumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(600,120)); ?></a>
				<h3>
					<?php the_tags('','',''); ?>
				</h3>
			</div>
		</li>
		
		<?php endwhile;?>
		<?php wp_reset_query(); ?>
		
		<?php endif; ?>
	</ul>

</div>
	
<?php //get_utilityBar(); ?>

<?php get_footer(); ?>

