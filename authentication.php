<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $fullname = post_data('fullname');
    $email = post_data('email');
    $password = post_data('password');

    
}

function post_data ($field){
    $_POST[$field] ??= '';
    return htmlspecialchars(stripslashes($_POST[$field]));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>Let's get to know you, please fill the form below.</p>

       <form action="" method="post"> 
        Full Name: <input type="text" name="fullname" value="" required>
        <br>
        <br>
        Email: <input type="email" name="email" value="" required>
        <br>
        <br>
        Password: <input type="password" name="password" value="" required>
        <br>
        <br>
        <button type="submit">Login</button>
    
        </form>
    
    
</body>
</html>