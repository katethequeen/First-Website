<?php
if (isset($_POST['submit']))
{
    $to = "Capitaniandrea65@gmail.com";
    $userName = $_POST['userName'];
    $from = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];
    $subject = "Contact Form";
    $headers = "Da:" . $from;
    $result = mail($to, $subject, $userMessage, $headers);

    if ($result)
    {
        echo '<script type="text/javascript">alert("Your message was sent!");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>