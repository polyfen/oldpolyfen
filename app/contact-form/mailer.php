<?php

require_once('functions.php');
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "400 Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
       $recipient = "hi@polyfen.com";

	   $toname = "Polyfen";


        // Set the email subject.
        $subject = "New message from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

		$from = "mycontactform205@gmail.com";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        //if (mail($recipient, $subject, $email_content, $email_headers)) {


			if (ifynmail($recipient, $toname,$subject, $name,$from,$email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
           echo "<div id='success-message'><h2>Success!</h2>
           <h3>Your message was sent.</h3></div>";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "500 Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
