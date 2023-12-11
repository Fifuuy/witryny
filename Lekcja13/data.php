<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $data = data("H:i d/m/y");
   
        if(isset($_COOKIE['ciacho'])){
            setcookie("ciacho", $data, time()+3600,"/","localhost",false);
            echo "czesc";
        }else
        {
            echo "<p>ostatnio odwiedziles nas $data </p>";
        }
    ?>
    
</body>
</html>