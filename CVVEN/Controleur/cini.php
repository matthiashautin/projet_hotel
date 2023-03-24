<form method="post" action="test.php">
  <input type="submit" name="envoyer" value="Envoyer">
</form>

<?php

$to = "greghautin@gmail.com";
$subject = "TEST Mail";
$message = "Salut, ca fonctionne ! ";
$headers = "Content-Type: text/plain; charset=etf-8\r\n";
$headers .= "From: matthiashautin@gmail.com\r\n";


if(isset($_POST['envoyer'])) {
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'An error occurred while sending the email.';
    }
}
?>


