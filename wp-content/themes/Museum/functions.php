<?php
//Let's fuckin load jQuery
	
function run_js() {

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js', false, '1.4', true);
		wp_enqueue_script('jquery');

		if (is_home()) {
			wp_enqueue_script('loopedSlider', get_bloginfo('template_url') . '/js/loopedSlider.js', array('jquery'), '1.0', true);
			wp_enqueue_script('home', get_bloginfo('template_url') . '/js/home.js', array('jquery'), '1.0', true);
			}
		
		if (is_single()) {
			wp_enqueue_script('validate', get_bloginfo('template_url') . '/js/jquery.validate.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('inFieldLabel', get_bloginfo('template_url') . '/js/jquery.infieldlabel.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('fancybox', get_bloginfo('template_url') . '/js/fancybox/jquery.fancybox-1.3.1.js', array('jquery'), '1.0', true);
			wp_enqueue_script('single', get_bloginfo('template_url') . '/js/single.js', array('jquery'), '1.0', true);
			}
			
		if (is_page_template('page-contact.php')) {
			//wp_enqueue_script('validate', get_bloginfo('template_url') . '/js/jquery.validate.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('inFieldLabel', get_bloginfo('template_url') . '/js/jquery.infieldlabel.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('contact', get_bloginfo('template_url') . '/js/contact-form.js', array('jquery'), '1.0', true);
			}
			
		if (is_page_template('page-blog.php') || ('page-work.php'))  {
			wp_enqueue_script('inFieldLabel', get_bloginfo('template_url') . '/js/jquery.infieldlabel.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('liveFilter', get_bloginfo('template_url') . '/js/jquery.liveFilter.js', array('jquery'), '1.0', true);
			wp_enqueue_script('archive', get_bloginfo('template_url') . '/js/archive.js', array('jquery'), '1.0', true);
			}
			
		if (is_page_template('page-archive.php')) {
			wp_enqueue_script('inFieldLabel', get_bloginfo('template_url') . '/js/jquery.infieldlabel.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('liveFilter', get_bloginfo('template_url') . '/js/jquery.liveFilter.js', array('jquery'), '1.0', true);
			wp_enqueue_script('archive', get_bloginfo('template_url') . '/js/archive.js', array('jquery'), '1.0', true);
			}
			
		if (is_page_template('page-about.php')) {
			//wp_enqueue_script('twitter', get_bloginfo('template_url') . '/js/jquery.twitter.js', array('jquery'), '1.0', true);
			//wp_enqueue_script('about', get_bloginfo('template_url') . '/js/about.js', array('jquery'), '1.0', true);
			}
	}
}

add_action('wp_print_scripts', 'run_js');

// Remove junk from head
//----------------------------------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// Automatic Feed Links
//----------------------------------------------------------------------------
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}

// Enable support for post-thumbnails    
//----------------------------------------------------------------------------

add_theme_support('post-thumbnails');  
set_post_thumbnail_size( 240, 240, true ); // 140 pixels wide by 140 pixels tall, hard crop mode
add_image_size( 'single-post-thumbnail', 240, 240, true ); // Permalink thumbnail size


// Get Or Print Any Custom Field Value Easily With A Custom Function
//----------------------------------------------------------------------------
function get_custom_field_value($szKey, $bPrint = false) {
	global $post;
	$szValue = get_post_meta($post->ID, $szKey, true);
	if ( $bPrint == false ) return $szValue; else echo $szValue;
}


// No more jumping for read more link
//----------------------------------------------------------------------------
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'&raquo;'.'</a>';
}
add_filter('the_content_more_link', 'no_more_jumping');

// Avatars additions 
//----------------------------------------------------------------------------
if (!function_exists('fb_addgravatar')) {
	function fb_addgravatar($avatar_defaults) {

		$myavatar1 = get_bloginfo('template_directory').'/images/xavatar.png';
		$avatar_defaults[$myavatar1] = 'eight12';
 
		#$myavatar2 = get_bloginfo('template_directory').'/images/avatar-02.png';
		#$avatar_defaults[$myavatar2] = 'geek';
 
		#$myavatar3 = get_bloginfo('template_directory').'/images/avatar-03.png';
		#$avatar_defaults[$myavatar3] = 'cool';

		return $avatar_defaults;
	}
	add_filter('avatar_defaults', 'fb_addgravatar');
}



//Include Slider php file
//----------------------------------------------------------------------------

function get_slider_feature($name = null) {
	do_action('get_slider_feature');
	
	$templates = array();
	if (isset($name))
		$templates[] = "slider-feature-{$name}.php";
	$templates[] = "slider-feature.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/slider-feature.php');
}

function get_slider_recent_12($name = null) {
	do_action('get_slider_recent_12');
	
	$templates = array();
	if (isset($name))
		$templates[] = "slider-recent-12-{$name}.php";
	$templates[] = "slider-recent-12.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/slider-recent-12.php');
}

function get_recent_work_4($name = null) {
	do_action('get_recent_work_4');
	
	$templates = array();
	if (isset($name))
		$templates[] = "recent-work-4-{$name}.php";
	$templates[] = "recent-work-4.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/recent-work-4.php');
}

function get_recent_writing($name = null) {
	do_action('get_recent_writing');
	
	$templates = array();
	if (isset($name))
		$templates[] = "recent-writing-{$name}.php";
	$templates[] = "recent-writing.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/recent-writing.php');
}



function get_estReadTime($name = null) {
	do_action('get_estReadTime');
	
	$templates = array();
	if (isset($name))
		$templates[] = "estReadTime-{$name}.php";
	$templates[] = "estReadTime.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/estReadTime.php');
}

//Include navigation.php
function get_navigation($name = null) {
	do_action('get_navigation');
	
	$templates = array();
	if (isset($name))
		$templates[] = "navigation-{$name}.php";
	$templates[] = "navigation.php";
	if ('' == locate_template($templates, true))
		load_template(get_theme_root() . '/default/navigation.php');
}


//Register Sidebar(s)
//----------------------------------------------------------------------------
if ( function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Blog',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}


//Display Future Post for non-logged in users
//----------------------------------------------------------------------------

add_filter('the_posts', 'show_all_future_posts');

function show_all_future_posts($posts) {
   global $wp_query, $wpdb;

   if(is_single() && $wp_query->post_count == 0)
   {
      $posts = $wpdb->get_results($wp_query->request);
   }

   return $posts;
}

//Custom Dashboard Widget
//----------------------------------------------------------------------------

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	
	wp_add_dashboard_widget('custom_help_widget', 'Tech Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '<p>Welcome to the "At The Crossroads" Admin page. Need help, or did you find a bug? <a href="mailto:benjamin@812studio.com">Contact the developer here</a>.</p>';
}


//Adds Post Thumbnail to Page/Post Overview
//----------------------------------------------------------------------------
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
 
	// for post and page
	add_theme_support('post-thumbnails', array( 'post', 'page' ) );
 
	function fb_AddThumbColumn($cols) {
 
		$cols['thumbnail'] = __('Thumbnail');
 
		return $cols;
	}
 
	function fb_AddThumbValue($column_name, $post_id) {
 
			$width = (int) 35;
			$height = (int) 35;
 
			if ( 'thumbnail' == $column_name ) {
				// thumbnail of WP 2.9
				$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
				// image from gallery
				$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
				if ($thumbnail_id)
					$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
				elseif ($attachments) {
					foreach ( $attachments as $attachment_id => $attachment ) {
						$thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
					}
				}
					if ( isset($thumb) && $thumb ) {
						echo $thumb;
					} else {
						echo __('None');
					}
			}
	}
 
	// for posts
	add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );
 
	// for pages
	add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}

//Add any XHTML to tag/taxonomy description
//----------------------------------------------------------------------------
//remove_filter( 'pre_term_description', 'wp_filter_kses' );

//Taxonomy for Presenters
//----------------------------------------------------------------------------

//register_taxonomy( 'actor', 'post', array( 'hierarchical' => false, 'label' => __('Actors', 'series'), 'query_var' => 'actor', 'rewrite' => array( 'slug' => 'actors' ) ) );

function create_my_taxonomies() {
	//Presenters
	register_taxonomy('client', 'post', array('hierarchical' => false, 'label' => __('Client', 'series'), 'query_var' => 'client', 'rewrite' => array( 'slug' => 'Client' )));


/*	
	//Location
	register_taxonomy('location', 'post', array('hierarchical' => false, 'label' => 'Location', 'query_var' => true, 'rewrite' => true));
	
	//Time
	register_taxonomy('time', 'post', array('hierarchical' => false, 'label' => 'Time', 'query_var' => true, 'rewrite' => true));
	
	
*/
	}
add_action('init', 'create_my_taxonomies', 0);




//OPTIONS PAGE
//----------------------------------------------------------------------------



//Admin Footer
//----------------------------------------------------------------------------
function remove_footer_admin () {
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.812studio.com" target="_blank">812studio</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

?>
<?php
//COMMENT LIST FORMATING

function custom_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>" class="comment-body">      
        
		<div class="comment-author vcard">
			<p><?php echo get_comment_author_link(); ?></p>
			<span class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date('M, j'), get_comment_time()) ?></a> <?php edit_comment_link(__('(Edit)'),' ','') ?></span>
		</div>      
	  
		<div class="comment-text">
			<?php comment_text(); ?>
			<div class="reply">
				<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
	  
		<div class="comment-avatar">
			<p><?php echo get_avatar($comment,$size=$args['avatar_size']); ?></p>
		</div>
	    
		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.') ?></em>
		<?php endif; ?>	  
      
    </div>
<?php
}
?>
<?php 
//REPLY LINK
/*
function my_replylink($c='',$post=null) {
  global $comment;
  // bypass
  if (!comments_open() || $comment->comment_type == "trackback" || $comment->comment_type == "pingback") return $c;
  // patch
  $id = $comment->comment_ID;
  $reply = 'Reply';
  $o = '<a class="comment-reply-link" rel="'.$comment->comment_author.'" id="reply-comment-'.$id.'" href="'.get_permalink().'?replytocom='.$id.'#respond">'.$reply.'</a>';
  return $o;
}
add_filter('comment_reply_link', 'my_replylink');
*/
?>