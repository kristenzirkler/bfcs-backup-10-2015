<?php
  $name = $_REQUEST['name'] ;
  $company = $_REQUEST['company'] ;
  $title = $_REQUEST['title'] ;
  $address = $_REQUEST['address'] ;
  $city = $_REQUEST['city'] ;
  $state = $_REQUEST['state'] ;
  $zip = $_REQUEST['zip'] ;
  $phone = $_REQUEST['phone'] ;
  $call_time = $_REQUEST['call_time'] ;
  $email = $_REQUEST['email'] ;
 

  mail( "kevin.miller@peoriaaz.gov", "Campaign for Joy Online Form Submission",
    $message, "From: $email" );
  header( "Location: http://www.BFCSFamily.org/thankyou.html" );
?>
