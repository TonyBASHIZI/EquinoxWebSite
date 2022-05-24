 <?php

    if (isset($_POST['sendmail']) || !empty($_POST['sendmail'])) {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $_POST['mail'];
        $to = "contact@equinoxmediacd.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "De :" . $from;
        mail($to, $subject, $message, $headers);
        echo "L'email a été envoyé.";
    }

    ?>