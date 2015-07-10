<div id="sidebar" role="complementary">
	<h5>Schedule</h5>
	<div id="eventSlider" class="sideSlider">
		<!--
		<a href="#" class="previous">previous</a>
		<a href="#" class="next">next</a>
		-->
		<ul class="pagination">
			<li class="active"><a href="#" rel="1">March 25</a></li>
			<li><a href="#" rel="2">March 26</a></li>
			<li><a href="#" rel="3">March 27</a></li>
		</ul>
		<div class="eventBoard">
	        <div class="eventLists">
	        
	        	<div id="thursday" class="list">
					<?php $my_query = new WP_Query('category_name=Thursday&showposts=50&order=ASC');
					while ($my_query->have_posts()) : $my_query->the_post();?>
						
					<ul><!-- THURSDAY -->
						<li><a class="bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<li><?php the_tags('', '', ''); ?></li>
						<?php if ( function_exists('get_custom_field_value') ) : ?>
			       			<!-- <li><a href="<?php //the_permalink(); ?>"><?php //get_custom_field_value('Presentation', true); ?></a></li>-->
					    <?php endif; ?>
					</ul>				
					<?php endwhile; ?>		        	
				</div>
				
				<div id="friday" class="list">
					<?php $my_query = new WP_Query('category_name=Friday&showposts=50&order=ASC');
					while ($my_query->have_posts()) : $my_query->the_post();?>
						
					<ul><!-- FRIDAY -->
						<li><a class="bold" href="<?php the_permalink(); ?>"><?php if ( function_exists('get_custom_field_value') ){ get_custom_field_value('Presentation', true);} ?></a></li>		
						<li><?php the_tags('', '', ''); ?></li>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					</ul>				
					<?php endwhile; ?>	
				</div>
				
				<div id="saturday" class="list">
					<?php $my_query = new WP_Query('category_name=Saturday&showposts=50&order=ASC');
					while ($my_query->have_posts()) : $my_query->the_post();?>
						
					<ul><!-- SATURDAY -->
						<li><?php the_tags('', '', ''); ?></li>
						<li><a href="<?php the_permalink(); ?>"><?php if ( function_exists('get_custom_field_value') ){ get_custom_field_value('Presentation', true);} ?></a></li>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					</ul>				
					<?php endwhile; ?>	
				</div><!-- End Saturday -->
	        </div><!-- End EventList -->
		</div><!-- End EnventBoard -->

	</div><!-- End EventSlider -->
</div>