<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <?php
            if(!isset($_COOKIE['pismo'])){
                echo "<p>Dzien donbry! sprawdz regulamin naszej strony.</p>";
                setcookie('pismo',"1",time()+3600,"/","localhost",false);
            }
            else{
                echo "<p>Milo nam ze nas znowu odwiedziles</p>";
                echo "To twoj ",$_COOKIE["pismo"]," raz na naszej stronie";
                setcookie("pismo"), (int)$_COOKIE["pismo"]+1,time()+3600,"/","localhost",false;
        ?>
        <form action="usun.php" method="post">
            usun plik cookie <input type="submit" value="usun plik cookie">
        </form>

</body>
</html>