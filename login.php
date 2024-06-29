<?php
session_start();
 
include __DIR__ . '/users.php';

if (isset($_SESSION['name'])) {
    header('Location: ./index.php');
    exit;
};


$authenticated = null;
$username = null;
$password = null;


if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
   
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['name'] = $username;
            $authenticated = true;
            header('Location: ./index.php');
            exit;
        }
    }


    $authenticated = false;


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
       
    <h1>Enter your username and password</h1>
       <form action="" method="GET">
           
           <label for="username">Username:</label>
           <input type="text" name="username" id="username" />
           <label for="password">Password:</label>
           <input type="password" name="password" id="password" />
           <button type="submit">Submit</button>
       </form>
       
       <?php if ($authenticated === false && $username !== null && $password !== null) {
    echo 'Invalid username or password';
} ?>

   </main>

</body>
</html>