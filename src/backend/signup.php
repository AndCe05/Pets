<?php
    include('../../config/database.php');

    $fullname=$_POST['fname'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $enc_pass = md5($passwd);

    $sql = "
    INSERT INTO users (fullname, email, password) 
        VALUES ('$fullname', '$email','$enc_pass')
    ";

    $ans = pg_query($conn,$sql);
    if ($ans){
        echo "<script>alert('user has been registerd')</script>";
        header("refresh: 0; url= ../signin.html");
    }else{
        echo "Error: " . pg_last_error();
}

//Close connection
pg_close($conn)


?>