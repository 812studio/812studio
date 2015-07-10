<?php get_header(); ?>

<?php //get_sliderSlim(); ?>

<div id="writing">
	<h5 class="pagetitle"><?php single_tag_title(); ?></h5>
	
	<ul>
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		
		<li>
			<div class="meta">
				<?php the_time('M j, Y ') ?>
				<?php comments_number('0','1','%'); ?>
			</div>
			
			<div class="content">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php global $more; $more = 0; ?>
				<?php the_content('<p class="serif">Read more</p>'); ?>
			</div>
			<h3>
				<a class="recentThumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(200,200)); ?></a>
				<?php the_tags('','',''); ?>
			</h3>
		</li>
		
		<?php endwhile; endif;?>

	</ul>

</div>


<?php //get_quickEventList(); ?>

<?php get_footer(); ?>