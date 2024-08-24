<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nest Class</title>
</head>
<body>
    <div>
        <h2 style="text-align: center;">
            <?php
            include "var.php";
        
            echo $next_cl;
            ?>

        </h2>
    </div>
    <div>
    <h2 style="text-align: center;">
            <?php
            include "var.php";
        
            echo $com_soon;
            ?>

        </h2>

        <?php
        $string = "Hello, World!";
        echo strlen($string), "<br>"; // Output: 13

        $string = "Hello, World!";
    echo strpos($string, "World"); // Output: 7
        ?>
    </div>
</body>
</html>


