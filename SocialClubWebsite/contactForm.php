<?php 
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function normalizePhone($phone) {
    // keep digits and leading +
    $phone = trim($phone);
    $phone = preg_replace('/(?!^\+)[^\d]/', '', $phone); // remove non-digits except leading +
    return $phone;
}

function isValidPhone($phone) {
    $p = normalizePhone($phone);

    // Must be +digits or digits, and 7–15 digits (common international range)
    if (!preg_match('/^\+?\d{7,15}$/', $p)) {
        return false;
    }
    return true;
}

$email = $_POST['mail'] ?? '';
$phone = $_POST['phonenumber'] ?? '';

if (!isValidEmail($email)) {
    exit('Invalid email address.');
}

if (!isValidPhone($phone)) {
    exit('Invalid phone number.');
}

// Optional: store normalized phone
$phone = normalizePhone($phone);

if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $phonenumber = $_POST["phonenumber"];
        $emailFrom = $_POST["mail"];
        $subject = $_POST["subject"];
        $description = $_POST["description"];

        $mailTo = "kingsnortonenquiries@gmail.com";
        $headers = "From: ".$emailFrom. "\n". "Phone: ".$phonenumber;


        if(mail($mailTo,$subject,$description, $headers)){
            echo "Email sent";
        }else{
            echo "Email not delivered";
        }
        
}
?>