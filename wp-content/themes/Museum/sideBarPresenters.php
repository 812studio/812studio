<div id="sidebar" role="complementary">
	<h5>Info</h5>
	
	<ul class="presenterInfo links">
		<?php //Photo ID
			if ( function_exists('has_post_thumbnail') and has_post_thumbnail() ) : ?>
	   		<li style="margin-bottom:.6em;"><?php the_post_thumbnail(array(300, 300), true); ?></li>
		<?php endif; ?>
		
		<?php //Presenter EMAIL
			$email = get_post_meta($post->ID, 'Presenter_Email', true);
			if ($email == '')
			{ 
			echo "";
			} else { 
			echo "<li>E-mail: <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email'>Send a message</a></li>"; 
		} ?>
		
		<?php //Presenter URL
			$website = get_post_meta($post->ID, 'Presenter_URL', true);
			if ($website == '')
			{ 
			echo "";
			} else { 
			echo "<li>Website: <a href='http://$website'>" . $website . "</a></li>"; 
		} ?>
		
		
		<?php //Presenter_Facebook
			$facebook = get_post_meta($post->ID, 'Presenter_Facebook', true);
			if ($facebook == '')
			{ 
			echo "";
			} else { 
			echo "<li>Facebook: <a href='$facebook'>Check me out</a></li>"; 
		} ?>
		
		<?php //Presenter_Twitter
			$twitter = get_post_meta($post->ID, 'Presenter_Twitter', true);
			if ($twitter == '')
			{ 
			echo "";
			} else { 
			echo "<li>Twitter: <a href='http://twitter.com/$twitter'>Follow me</a></li>"; 
		} ?>
		
	</ul>
</div>

<!--
Presenter_URL
Presenter_Email
Presenter_Facebook
Presenter_Twitter
-->