<?php
define("TITLE", "Contact Us | Franklin's Fine Dining");
include("./assets/includes/header.php");

?>

<div id="contact">

    <hr>

    <h1>Get in touch with us!</h1>

    <?php

    // Check for header injection
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        // Check to see name and email have some header injection
        if (has_header_injection($name) || has_header_injection($email)) {
            die(); // if true, kill the script
        }

        if (!$name || !$email || !$msg) {
            echo '<h4 class="error">All Fields Required!</h4><a href="contact.php" class="button block">Go Back And Try Again</a>';
            exit;
        }

        // Add the recipient email to a variable
        $to = "siddharthpadwal3@gmail.com";

        // Create a subject
        $subject = "$name has sent you a message via your contact form";

        // Construct the message
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message: \r\n$msg";

        // If the subscribe was checked.. 
        if (isset($_POST['subscribe'])) {
            $message .= "\r\n\r\nPlease add the $email to the mailing list. \r\n";
        }

        $message = wordwrap($message, 72);

        // Set the mail headers to variable
        $headers = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text\plain; charset=iso-8859-1\r\n";
        $header .= "From: $name <$email>\r\n";
        $header .= "X-Priority: 1\r\n";
        $header .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the mail
        mail($to, $subject, $message, $header);

        ?>

        <h5>Thanks for contacting Franklin's!</h5>
        <p><a href="index.php" class="button block">&laquo; Go To Home Page</a></p>

    <?php } else { ?>

        <form action="" method="post" id="contact-form">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name">

            <label for="email">Your email</label>
            <input type="text" id="email" name="email">

            <label for="message">Your message</label>
            <textarea name="message" id="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to newsletter</label>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">

        </form>

    <?php } ?>

    <hr>

</div>
<!--contact-->


<?php include("./assets/includes/footer.php"); ?>