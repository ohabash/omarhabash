<?php

// $nme = $_POST["nme"];
// $eml = $_POST["eml"];
// $msg = $_POST["msg"];
$nme = "omar111";
$eml = "ContactOmarNow@gmail.com";
$msg = "the111 msg";
$email1 = 'contactOmarnow@gmail.com';




$EmailTo = "contactOmarnow@gmail.com";
$Subject = "$nme would like to chat";

$EmailTo1 = $eml;
$Subject1 = "Thank you for submitting your story on Promote Love";
 


require "template.php";
require "thankyou.php";
 
// send email & call template
$success = mail($EmailTo, $Subject, $Body, "From:".$eml);
$thankyou = mail($EmailTo1, $Subject1, $Body1, "From:".$email1);
mail($EmailTo, $Subject, $Body, "From:".$eml);
mail($EmailTo1, $Subject1, $Body1, "From:".$email1);
// redirect to success page
if ($success){
    echo "success";
}else{
    echo "invalid";
}
?>

