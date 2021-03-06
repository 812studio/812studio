<?php
/*
Template Name: Contact
*/
?>


<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'You forgot to enter your comments.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'benjamin@812studio.com';
			$subject = 'Contact Form Submission from '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: 812studio <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed 812studio';
				$headers = 'benjamin gandhi-shepard <benjamin@812studio.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>

<?php get_header(); ?>


	<div id="content" role="main">
		
		<h6 class="contact"><?php single_post_title(); ?></h6>
		
		<div <?php post_class("singleLayout fire1") ?> id="post-<?php the_ID(); ?>">
		<!--
		<div id="postHead">
			<?php //the_post_thumbnail(array(960,500)); ?>
		</div>
		-->
		
				
		<div id="metaSpace">
			<div class="meta">
				<p><?php echo date ('M j, Y ') ?></p>
				<?php //get_estReadTime(); ?>
			</div>
		</div>
		
		<div class="entry">
						
			<?php if(isset($emailSent) && $emailSent == true) { ?>

			<div class="thanks">
				<h6>Thanks, <?=$name;?></h6>
				<p>Your email was successfully sent. I will be in touch soon.</p>
			</div>
	
			<?php } else { ?>
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
					
					<?php if(isset($hasError) || isset($captchaError)) { ?>
						<p class="error">There was an error submitting the form.<p>
					<?php } ?>
				
					<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
										
						<ol class="forms">
							<li>
								<label class="inField" for="contactName">Name</label>
								<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
								<?php if($nameError != '') { ?>
									<span class="error"><?=$nameError;?></span> 
								<?php } ?>
							</li>
							
							<li>
								<label class="inField" for="email">E-mail</label>
								<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
								<?php if($emailError != '') { ?>
									<span class="error"><?=$emailError;?></span>
								<?php } ?>
							</li>
							
							<li class="textarea">
								<label class="inField" for="commentsText">Enter your comments, questions or requests here...</label>
								<textarea name="comments" id="commentsText" rows="20" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
								<?php if($commentError != '') { ?>
									<span class="error"><?=$commentError;?></span> 
								<?php } ?>
							</li>
							<!--
							<li class="inline">
								<input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
								<label for="sendCopy">Send a copy of this email to yourself</label>
							</li>
							-->
							<li class="screenReader">
								<label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label>
								<input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
							</li>
							
							<li class="buttons">
								<input type="hidden" name="submitted" id="submitted" value="true" />
								<button type="submit">Send &raquo;</button>
							</li>
						</ol>
					</form>
				
					<?php endwhile; ?>
				<?php endif; ?>
			<?php } ?>
		
		</div>

	</div>

<?php get_footer(); ?>
	

