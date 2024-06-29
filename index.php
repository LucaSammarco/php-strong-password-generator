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
                    <a href="./logout.php">Logout</a>
                </li>

            </ul>
        </nav>
    </header>

    <main>
       
    <h1>Welcome <?php echo $_SESSION["name"] ?></h1>
        


    </main>



</body>
</html>