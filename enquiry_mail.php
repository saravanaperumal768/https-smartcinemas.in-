<?php

include('connection.php');

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/iconic-nation-415605-61ba055c564f.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1k_3sHP_PvSD-mGkr-OZgJPN0jcErEWVig65TvP6TyLc";

// Instantiate the Google Sheets service
$service = new Google_Service_Sheets($client);

$range = "Websites Package Leads!A1:C2"; // Sheet name


 $to = "business@avatarprints.com";
// $to = "avatarwebsites@gmail.com";
    $email = $_POST['email'];
    
	$name=$_POST['name'];
	$mobileNumber=$_POST['mobileNumber'];
	
	$location=$_POST['location'];

    $package=$_POST['package'];

	$cus_date=date("Y-m-d");

    $values = [
		[$cus_date, $name, $email,  $mobileNumber,  $location, $package],
	];
	//echo "<pre>";print_r($values);echo "</pre>";exit;
	$body = new Google_Service_Sheets_ValueRange([
		'values' => $values
	]);
	$params = [
		'valueInputOption' => 'RAW'
	];



	$sql = "INSERT INTO package (name,email,mobile,location,package,cus_date) values ('$name','$email', '$mobileNumber','$location', '$package',  '$cus_date')";
 mysqli_query($db,$sql);

 	$subject="Package Enquiry Mail From Smart Home Cinemas";
 	$message = "This message was sent from:\n" .
 	"Smart Home Cinemas\n" .
 	"------------------------------------------------------------------\n\n" .
 	"Name          :\t $name\n\n" .
 	"Email         :\t $email\n\n" .
 	"Mobile Number :\t $mobileNumber\n\n" .
 	"Location      :\t $location\n\n".
 	"Package      :\t $package\n\n";
          
    // echo $message;
		
//    //end of message
     $headers  = "From: $email\r\n";
    // $headers .= "Content-type: text/html\r\n";

//   	// print_r($intQuery);
//     echo $message;
//     exit;

$result = $service->spreadsheets_values->append(
	$spreadsheetId,
	$range,
	$body,
	$params
);

// if($result->updates->updatedRows == 1){
// 	echo "Success";
// } else {
// 	echo "Fail";
// }
    if(mail($to, $subject, $message,$headers))

 	echo "";
  	
// // print_r($intQuery);
// // exit();
 	else
 	echo "";
	?>
 	<html>
     <head>
     <script>
 	alert("Thank you for your enquiry, We will contact you shortly");
 	window.location.href="packages.php";
     </script>
    
   </head>
    
   </html>