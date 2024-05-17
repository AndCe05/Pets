<?php
     session_start();
     if(isset($_SESSION['id_user'])){
        //header("Location:home.php");
     }else{
        header("refresh:0;url=signin.php");
        exit;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pest | Home</title>
    <link rel="icon" type="images.png" href="../src/icons/images.png">
</head>
<body>
    <a href ="#" > exit 
</body>
</html>