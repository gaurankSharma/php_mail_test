<?php 
if(isset($_POST['submit'])){
// this is your Email address
$to = "gaurank@cartoonmango.com";
// this is the sender's Email address 
$from = $_POST['email']; 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$subject = "Form submission";

$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);

echo "Mail Sent. Thank you " . $first_name . $from . $last_name . $_POST['message'] . ", we will contact you shortly.";
}
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 