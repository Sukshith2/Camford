<?php

date_default_timezone_set("Asia/Calcutta"); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_POST) {
	
	/* echo "test2";
	exit; */

    $ch = curl_init();
    $name = $_POST['student']; 
	$Parent = $_POST['parent'];
	$IAM = $_POST['IAM'];
	$Email = $_POST['email'];
    $Phone = $_POST['phone'];
	$Grade = $_POST['grade'];
	
	$utm_source = $_POST['utm_source'];   
    $utm_campaign = $_POST['utm_campaign'];
	$utm_medium = $_POST['utm_medium'];	
    $utm_term = $_POST['utm_term'];
    $utm_content = $_POST['utm_content'];
    $utm_keyword = $_POST['utm_keyword'];
    $utm_adgroup = $_POST['utm_adgroup'];
	
	
    $date = date("d/m/Y h:i a");
    $time = date("h:i a");

  
		      $url = 'https://script.google.com/macros/s/AKfycbxh3R36GdkArUeAeqqvknqgdQ7miB6ZlR1iUzgZwLxp8hDOLuxe8WEP-l1fqLIdEqrnPg/exec';
        
		
    
	
	
	$query = 'Student=' . $name . '&Parent=' . $Parent . '&IAM=' . $IAM . '&Email=' . $Email . '&Phone=' . $Phone . '&Grade=' . $Grade . '&utm_campaign=' . $utm_campaign . '&utm_medium=' . $utm_medium . '&utm_source=' . $utm_source . '&utm_term=' . $utm_term . '&Date=' . $date . '&Time=' . $time. '&description=' . $description . '&utm_keyword=' . $utm_keyword. '&utm_content=' . $utm_content. '&utm_adgroup=' . $utm_adgroup;

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

    $response = curl_exec($ch);

    curl_close($ch);
	
	
	
    header('Location: https://thecamford.org/applications-demo/thank-you.html');
}
else
{
    header('Location: index.php');
}
?>