<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_website = $_POST['website'];
$field_address = $_POST['address'];
$field_subject = $_POST['subject'];
$field_message = $_POST['comment'];

$mail_to = 'ishanalways@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Website: '.$field_website."\n";
$body_message .= 'Address: '.$field_address."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the feedback.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact at ishanalways@gmail.com');
        window.location = 'index.html';
    </script>
<?php
}

?>