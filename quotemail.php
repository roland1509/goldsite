<?php
session_start();

if (isset($_POST['submitquote'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    

    // Email content
    $to = 'quotation@globalcoastmines.com';
    $email_subject = 'New Quote Request- Global Coast Mine - Quote Form';
    $email_body = '<h3> You have a new Enquiry </h3>
        <h4> FullName : ' . $name . ' </h4>
        <h4> Email : ' . $email . ' </h4>
        <h4> Subject : ' . $subject . '</h4>
        <h4> Service : ' . $service . '</h4>
        <h4> Message : ' . $message . ' </h4>';
    $headers = "From: '<?php $email ?>'\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['status'] = "Thank you for contacting us at Global Coastal Mine";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit(0);
    } else {
        $_SESSION['status'] = "Sorry, Message could not be sent.";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit(0);
    }
} else {
    header('Location: index.php');
    exit(0);
}
?>
