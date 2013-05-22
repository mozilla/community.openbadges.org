<?php

if ($_POST)
{
	$mailTo = 'badges@mozillafoundation.org';
	$mailFrom = $_POST['email'];
	$subject = 'Mozilla Open Badges Community Contact Form';
	$message = 'Name:'." \n".$_POST['name']."\n\n";
	$message .= 'Message:'."\n".$_POST['message'];
		
	if (mail($mailTo, $subject, $message, "From: ".$mailFrom)) {
		echo '<div class="thanks">Message Sent.</div>';
	} 
}
?>