<?php
    $fullname=$_POST['fnam'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $enc_pass = md5($passwd);

    echo "your fullname:".$fullname. "<br>";
    echo "your email:". $email. "<br>";
    echo "your password enc:". $enc_pass;

?>