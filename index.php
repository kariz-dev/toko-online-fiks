<?php

    // dengan kita mengetikan include_once kita dapat mengakses semua data yang ada pada file helper
    include_once("function/helper.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiks</title>
</head>
<body>
    
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>" />
            </a>

            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>

                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" />
                </a>
            </div>
        </div>

        <div id="content"></div>

        <div id="footer">
            <P>copyright Fiks 2019</p>
        </div>
    </div>
</body>
</html>