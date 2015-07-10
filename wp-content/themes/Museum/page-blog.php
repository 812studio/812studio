<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="work">
	<div id="searchField">
		<label class="inField" for="autoFilter">&raquo; Type <span class="greyText">to search <?php the_title();?>...</span></label>
		<input type="text" id="autoFilter" class="filter" name="liveFilter" />
	</div>
	
    <ul id="filter_me">
		<?php query_posts('category_name=writing'); ?>
			
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			
		<li>
			
			<div class="content">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php global $more; $more = 0; ?>
				<?php the_content('&raquo;'); ?>
				
				<?php
					$mycontent = $post->post_content; // wordpress users only
					$word = str_word_count(strip_tags($mycontent));
					$m = floor($word / 200);
					$s = floor($word % 200 / (200 / 60));
					$est = $m . ' min' . ($m == 1 ? '' : '') . ': ' . $s . ' sec' . ($s == 1 ? '' : '');
				?>
				<p>Reading time: <?php echo $est; ?></p>
				
				<?php //echo get_the_term_list($post->ID, 'client', '', ', ', ''); ?>
			</div>
			<div class="image">
				<a class="thumb120" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(600,120)); ?></a>
				<h3><?php the_tags('','',''); ?></h3>
			</div>
			<div class="meta">
				<?php the_time('M j, Y ') ?>
				<?php comments_popup_link('0 <span class="lilArrow"></span>','1 <span class="lilArrow"></span>','% <span class="lilArrow"></span>'); ?>
			</div>
		</li>
		
		<?php endwhile; endif;?>
		<?php wp_reset_query(); ?>
	</ul>

</div>
	
<?php //get_utilityBar(); ?>

<?php get_footer(); ?>


