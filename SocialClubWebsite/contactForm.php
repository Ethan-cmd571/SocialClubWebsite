<?php 
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