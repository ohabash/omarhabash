<?php

$nme = $_POST["nme"];
$eml = $_POST["eml"];
$msg = $_POST["msg"];
// $nme = "nme";
// $eml = "eml";
// $msg = "msg";
$email1 = 'contactOmarnow@gmail.com';




$EmailTo = "contactOmarnow@gmail.com";
$Subject = "$name submitted a story";

$EmailTo1 = $eml;
$Subject1 = "Thank you for submitting your story on Promote Love";
 


require "template.php";
require "thankyou.php";
 
// send email & call template
$success = mail($EmailTo, $Subject, $Body, "From:".$eml);
$thankyou = mail($EmailTo1, $Subject1, $Body1, "From:".$email1);
mail($EmailTo, $Subject, $Body, "From:".$eml);
// redirect to success page
if ($success){
    echo "success";
}else{
    echo "invalid";
}
?>