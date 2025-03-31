<!DOCTYPE html>
<html>
<body>
<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $tel = $_REQUEST["tel"];
    $email = $_REQUEST["email"];
    $age = !empty($_REQUEST["age"]) ? $_REQUEST["age"] : "Not given";
    $gender = "Not given";
    if (!empty($_REQUEST["male"])) {
        $gender = "Male";
    } else if (!empty($_REQUEST["female"])) {
        $gender = "Female";
    }  
    $suburb = !empty($_REQUEST["suburb"]) ? $_REQUEST["suburb"] : "Not given";
    $code = !empty($_REQUEST["code"]) ? $_REQUEST["code"] : "Not given";
    $street = !empty($_REQUEST["street"]) ? $_REQUEST["street"] : "Not given";
    $to_email = "shlooby07@gmail.com";
    $subject = "New Contact Us Message";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $contactus = "
    <html>
    <p>You have a message from the appointment page on your website:</p>
    <b>Name: </b>".$name."
    <br><b>Phone: </b>".$tel."
    <br><b>Email: </b>".$email."
    <br><b>Age: </b>".$age."
    <br><b>Gender: </b>".$gender."
    <br><b>Suburb: </b>".$suburb."
    <br><b>Post Code: </b>".$code."
    <br><b>Street: </b>".$street."
    </html>";
    $mail = mail($to_email,$subject,$contactus,$headers);
    if (!$mail) {
      $res = print_r(error_get_last()['message']);
    } else {
        $res = "Thanks, message sent.";
    }
}
?>
     <?php echo $res; ?> 
</body>
</html>