<? php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Contact Us";

    $mailto = "zedsoftt@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}