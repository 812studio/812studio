<?php
	$mycontent = $post->post_content; // wordpress users only
	$word = str_word_count(strip_tags($mycontent));
	$m = floor($word / 200);
	$s = floor($word % 200 / (200 / 60));
	$est = $m . ' min' . ($m == 1 ? '' : '') . ': ' . $s . ' sec' . ($s == 1 ? '' : '');
	
?>

<p>Reading time: <?php echo $est; ?></p>