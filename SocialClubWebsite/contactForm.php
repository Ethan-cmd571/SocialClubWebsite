<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $phonenumber = $_POST["phonenumber"];
        $emailFrom = $_POST["mail"];
        $subject = $_POST["subject"];
        $description = $_POST["description"];

        $mailTo = "KingsNortonEnquiries@hotmail.com";
        $headers = "From: ".$emailFrom. "\n". "Phone: ".$phonenumber;
        $txt = "You have received an email from" .$name.".\n\n".$message;


        mail($mailTo,$subject,$txt, $headers);
        header("Location: Bookings.php?mailsend");

}
}
?>