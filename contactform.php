<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "architectoinfo@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
        // \n\n = newline

        if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)) {
            header("Location: contact.php?fieldsempty=true&name=$name&mail=$mailFrom&subject=$subject&message=$message");

            // echo "You did not fill in all fields";

            // $result='<div class="alert alert-warning"><p>You did fill in all fields!</p></div>';
            // return  $result;
        } 
        
        //Check if email is valid
        elseif (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
            // echo("$mailFrom is not a valid email address");

            //dont lose message
            // header("Location: contact.php?contact=invalidemail&name=$name&subject=$subject&message=$message");

            // $result='<div class="alert alert-warning"><p>You did not give a valid email address!</p></div>';
            // return  $result;
        } 

        else {
            mail($mailTo, $subject, $txt, $headers);
            header("Location: contact.php?mailsend");

            

            // $result='<div class="alert alert-success"><p>Mail sent successfully. We will be in touch shortly!</p></div>';
            // return  $result;
        }

       



        

        


    }

?>



<!-- <?php
        
        //echo $result; 
?> -->
