<?php
	$name = $_POST["name"];
	$age = $_POST["age"];
	$email = $_POST["email"];
	$email1 = 'promotelovemovement@gmail.com';
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];
	$q6 = $_POST["q6"];
	$q7 = $_POST["q7"];




$EmailTo = "contactOmarnow@gmail.com";
$Subject = "$name submitted a story";

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