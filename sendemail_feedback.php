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

$range = "Website Consultant Homepage!A1:C2"; // Sheet name


$to = "business@avatarprints.com";
$email = $_POST['email'];
$name = $_POST['name'];
$mobileNumber = $_POST['phone']; // Assuming your form has a field named 'phone'
$message = $_POST['message'];
$cus_date = date("Y-m-d");


$values = [
    [$cus_date, $name, $email, $mobileNumber, $message],
];
//echo "<pre>";print_r($values);echo "</pre>";exit;
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];

$sql = "INSERT INTO  homepage_enquiry (name, email, phone, message, cus_date) VALUES ('$name', '$email', '$mobileNumber', '$message', '$cus_date')";
mysqli_query($db, $sql);

$subject = "Main Page Enquiry Mail From Smart Home Cinemas";
$email_message = "This message was sent from:\n" .
    "Smart Home Cinemas\n" .
    "------------------------------------------------------------------\n\n" .
    "Name          :\t $name\n\n" .
    "Email         :\t $email\n\n" .
    "Mobile Number :\t $mobileNumber\n\n" .
    "Message       :\t $message\n\n";

$headers  = "From: $email\r\n";

$result = $service->spreadsheets_values->append(
	$spreadsheetId,
	$range,
	$body,
	$params
);

if (mail($to, $subject, $email_message, $headers)) {
    // Success
    echo "";
} else {
    // Failure
    echo "";
}
?>

<html>
<head>
    <script>
        alert("Thank you for your enquiry, We will contact you shortly");
        window.location.href = "index.php";
    </script>
</head>
</html>
