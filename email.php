<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        $name = $_POST['name'];
        $number = $_POST['subject'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header = "From: guemacascomputers@gmail.com" . "\r\n";
        $header = "Reply-To: guemacascomputers@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = mail($email,$subject,$msg,$header);
        if ($mail) {
            echo "<h4>¡Email entregado!</h4>";
        }

    }
}
?>