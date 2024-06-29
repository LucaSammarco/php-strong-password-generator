<?php

require_once __DIR__ . '/utilities/functions.php';

session_start();


if (empty($_SESSION)) {
    header("Location: ./login.php");

}
var_dump($_SESSION);



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li>
                    <a href="./index.php">Home</a>
                </li>
                
                <li>
                    <a href="./username.php">Username</a>
                </li>

                <li>
                    <a href="./logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
       

        <form action="./username.php" method="GET">
            
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" />
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            <button type="submit">Submit</button>
        </form>


    </main>



</body>
</html>