<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <title>Document</title> -->
</head>
<body>
    <form action="" method="post">
        <input type="text" name="ciacho" id="">
        <input type="submit" value="wyslij">
    </form>
    <?php
         if(isset($_COOKIE['ciastko'])){
            $cookie  = $_POST['ciastko'];
            if(!isset($cookie))
            {
                setcookie("nazwa",$cookie, time()+3600,'localhost');
                
            }else
            {
                echo($_COOKIE['nazwa']);
                setcookie('nazwa',$cookie, time()+3500, 'localhost');
                echo ('nie ma ciastka');
            }
            
        }
    ?>
</body>
</html>