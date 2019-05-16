<?php

require_once __DIR__ . '/vendor/autoload.php';

//grab variables
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$mpdf= new \Mpdf\Mpdf();




$data='';

$data .= '<h1>Your Details</h1>';
$data .= '<strong>First Name </strong>'.$fname.'<br />';
$data .= '<strong>Last Name </strong>'.$lname.'<br />';
$data .= '<strong>Email </strong>'.$email.'<br />';
$data .= '<strong>Phone </strong>'.$phone.'<br />';

if($message)
{
	$data.='<br /><strong>Message</strong><br />' .$message;
}

$mpdf->WriteHTML($data);


$mpdf->Output('myfile.pdf','D');
