<?php
//EDIT THIS WITH YOUR EMAIL ADDRESS - this is where the mail will be sent
$admin_email = 'example@gmail.com';

//change to error_reporting(E_ALL) if you need to debug notices
error_reporting(E_ALL ^ E_NOTICE);

/**
 * Helper Functions
 */

//display errors for form fields
function display_error_or_success( $errors, $mail_sent){
	//if there are errors
	if(!empty($errors) OR !$mail_sent){
		echo '<section class="error form-message"> <h1>Your message could not be sent </h1>';
		//show each one, separated by a break tag
		foreach($errors as $error){
			echo $error;
			echo '<br />';
		}
		echo '</section>';
	}elseif(1==$mail_sent){
		echo '<section class="success form-message"> 
				<h1>Thank You for contacting us! </h1> 
				<p>We\'ll get back to you shortly.</p>
				</section>';

	}
}

//keep the value of a field after a form is submitted
function sticky_field( $field ){
	if( isset($field) ){
		echo $field;
	}
}

//for sticky checkboxes or radios
function checked( $expected, $actual ){
	if( $actual == $expected ){
		echo 'checked="checked"';
	}
}
//for sticky selects
function selected( $expected, $actual ){
	if( $actual == $expected ){
		echo 'selected="selected"';
	}
}

/**
 * Form parser Begins
 */

if( 1 == $_POST['did_submit'] ):
	//extract user submitted data, sanitize the data
	$title = filter_var( $_POST['title'], FILTER_SANITIZE_STRING );
	$subject = filter_var( $_POST['subject'], FILTER_SANITIZE_STRING );
	$name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
	$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
	$url = filter_var( $_POST['url'], FILTER_SANITIZE_URL);
	$state = filter_var( $_POST['state'], FILTER_SANITIZE_STRING );
	//allow certain tags in the message, strip all others
	$message = strip_tags( trim($_POST['message']), '<b><i><strong><em><p>' );
	 
	$valid = true;

	//Begin validating - check for errors

	//check for empty name field with string length
	if( 0 == strlen($name) ){
		$valid = false;
		$errors['name'] = 'Please fill out your name.';
	}
	//check for invalid email format
	if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
		$valid = false;
		$errors['email'] = 'Please provide a valid email address.';
	}
	//check for empty subject field
	if( 0 == strlen($subject) ){
		$valid = false;
		$errors['subject'] = 'Please choose one of the subjects.';
	}

	//only send the mail if the form was valid
	if( true == $valid ):
		//get ready to send mail - set up mail() parameters
		$to = $admin_email;
		$mail_subject = "$title - A Contact Form Submission";

		$body = "Subject: $subject \n";
		$body .= "Name: $name \n";
		$body .= "Email: $email \n";
		$body .= "URL: $url \n\n";
		$body .= "Message: $message \n\n";

		$header = "Reply-to: $email \r\n";
		$header .= "From: $name \r\n";

		//send it! did_send will equal 1 if the mail sends, 0 if it fails to send
		$mail_sent = mail( $to, $mail_subject, $body, $header );		

	endif; // still valid

endif; //did_submit

//no close PHP needed here