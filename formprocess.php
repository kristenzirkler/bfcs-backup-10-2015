<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<span class="style1">Thank you for your submission. <a href="http://www.bfcsfamily.org">Return to BFSCFamily.org</a>.</span><?php


## Spammers use the default form "enctype" which this script does not accept.
## This will generally limit form submittals to only live people browsing the website.
## form tag example:
## <form method="post" action="thisscript" enctype="multipart/form-data">


if (strpos($_SERVER["CONTENT_TYPE"], "multipart/form-data") !== false) {
	$todayis = date("l, F j, Y, g:i a");
	$subject = "Campaign For Joy Online Form Submission";
	$to = "mblack@bfcsfamily.org";

## Capture submitted form fields.
	$name = $_POST['Name'];
	$company = $_POST['Company'];
	$title = $_POST['Title'];
	$address = $_POST['Address'];
	$city = $_POST['City'];
	$state = $_POST['State'];
	$zip = $_POST['Zip'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$calltime = $_POST['CallTime'];
	
	


## Create email message body.
	$message = "Name: $name \n";
	$message .= "Company: $company \n";
	$message .= "Title: $title \n";
	$message .= "Address: $address \n";
	$message .= "City: $city \n";
	$message .= "State: $state \n";
	$message .= "Zip: $zip \n";
	$message .= "Phone: $phone \n";
	$message .= "Email: $email \n";
	$message .= "CallTime: $calltime \n";
	//Help
			$message .= 'Help: ';
			$i = 0;
			
			foreach($_POST['Help'] as $v){
				$message .= $_POST['Help'] = $v.', ';
				$i++;
			}
	
	
	

## Strip out extra to:, bcc:, and cc: (spam injections).
	$strip = array("to:", "bcc:", "cc:");
	$subject = str_replace($strip, "", $subject);
	$message = str_replace($strip, "", $message);
	$email = str_replace($strip, "", $email);
	$name = str_replace($strip, "", $name);
	$company = str_replace($strip, "", $company);
	$title = str_replace($strip, "", $title);
	$address = str_replace($strip, "", $address);
	$city = str_replace($strip, "", $city);
	$state = str_replace($strip, "", $state);
	$zip = str_replace($strip, "", $zip);
	$phone = str_replace($strip, "", $phone);
	$name = str_replace($strip, "", $calltime);

## Set proper headers for Windows Sendmail.
	$headers = "From: ".$name." <".$email.">\n";
	ini_set("sendmail_from",$email);



## Uncomment for testing or troubleshooting.
	$headers .= "cc: webmiller@cox.net";

## Send the message.
	mail($to, $subject, $message, $headers);
	ini_restore("sendmail_from");
}
?>
