<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "arianneghislaine@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>";
    
    if (mail($to, "Message from $name", $message, $headers)) {
        $status = "success";
        $response = "Thank you for your message!";
    } else {
        $status = "error";
        $response = "Oops! Something went wrong, please try again later.";
    }
    header("Location: index.php?status=$status&response=$response");
    exit();
}
?>

