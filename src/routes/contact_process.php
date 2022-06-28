<?php

 if(isset($_REQUEST['contactForm']))
{
    $to = "youremail@domain.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$website = $_REQUEST['website'];
    $comment = $_REQUEST['comment'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have Contact Us Info message by Indofact HTML Template.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a Leave us Your Info query email. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Website:</strong> {$website}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comment:</strong> {$comment}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	
    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:contact.html');
	die();
}
else if(isset($_REQUEST['getinTouch']))
{
    $to = "youremail@domain.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $comment = $_REQUEST['comment'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have Get in Touch message by Indofact HTML Template.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a Get in Touch query email. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$number}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comment:</strong> {$comment}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:index.html');
	die();
}
else if(isset($_REQUEST['requestaQuote']))
{
    $to = "youremail@domain.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$website = $_REQUEST['website'];
	$number = $_REQUEST['number'];
    $comment = $_REQUEST['comment'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have Contact Us Info message by Indofact HTML Template.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a Leave us Your Info query email. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$number}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Website:</strong> {$website}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comment:</strong> {$comment}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    
    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:request-quote.html');
	die();
}
else if(isset($_REQUEST['yourRating']))
{
    $to = "youremail@domain.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $comment = $_REQUEST['comment'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have Your Rating message by Indofact HTML Template.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a Review query email. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comment:</strong> {$comment}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    
    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:shop-detail.html');
	die();
}
else if(isset($_REQUEST['checkout']))
{
    $to = "youremail@domain.com";
    $from = $_REQUEST['email'];
    $fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$companyname = $_REQUEST['companyname'];
	$country = $_REQUEST['country'];
	$streetaddress = $_REQUEST['streetaddress'];
	$city = $_REQUEST['city'];
	$select = $_REQUEST['select'];
	$number = $_REQUEST['number'];
    $code = $_REQUEST['code'];
	$hosting = $_REQUEST['hosting'];
	$password = $_REQUEST['password'];
	$notes = $_REQUEST['notes'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have Contact Us Info message by Indofact HTML Template.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a Leave us Your Info query email. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>First Name*:</strong> {$fname}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Last Name*:</strong> {$lname}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Company name:</strong> {$companyname}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Country*:</strong> {$country}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Street address*:</strong> {$streetaddress}</td></tr>";
	$body .= "<tr><td style='border:none;'>{$streetaddress}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>City*:</strong> {$city}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>County*:</strong> {$city}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone*:</strong> {$number}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email address*:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Postcode/ZIP*:</strong> {$code}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>hosting:</strong> {$hosting}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Account password*:</strong> {$password}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Order notes:</strong> {$notes}</td></tr>";	
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";
   
    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:checkout.html');
	die();
}