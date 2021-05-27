<?php
if($_POST['kirim']){
    $admin = 'teddyknight403@gmail.com';
    
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    $headers = 'From: '.$email.' ' . "\r\n" .
               'MIME-Version: 1.0' . "\r\n" .
               'Contact-Type: text/html; charset=utf-8';

    $result = mail($admin, $name, $message, $headers);
    var_dump($result);

    echo '<a href="index.html">Kembali ke halaman</a>';
}
?>