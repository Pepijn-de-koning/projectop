<?php
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $name = $_POST['naam'];
    $visitor_email = $_POST['email'];
    $message = $_POST['onderwerp'];
    $subject = 'Bericht van de website';

    $email_body = "Gebruikers naam: $name\n" .
        "Gebruikers Email: $visitor_email\n" .
        "Bericht: $message.\n";


    $to = "29118@ma-web.nl";

    $headers = "From: $visitor_email \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    $result = mail($to, $subject, $email_body, $headers);

    if ($result === false) {
        echo 'Mail niet verstuurd';
        exit;
    }

    header("Location: index.php#Contact");
    $message = "De mail is verstuurd!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
