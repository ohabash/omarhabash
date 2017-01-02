<?php
	$nme = $_POST["nme"];
	$eml = $_POST["eml"];
	$msg = $_POST["msg"];
	$email1 = 'contacomarnow@gmail.com';




$EmailTo = "contactOmarnow@gmail.com";
$Subject = "$name submitted a contact request";

$EmailTo1 = $email;
$Subject1 = "Thank you for submitting your story on Promote Love";
 


require "template.php";
require "thankyou.php";
 
// send email & call template
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$thankyou = mail($EmailTo1, $Subject1, $Body1, "From:".$email1);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
?>