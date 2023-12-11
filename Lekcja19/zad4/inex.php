<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Wizytówk</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner">
        <h1>Wizytówki pracowników</h1>
        <form action="" method="post">
            <input type="number" name="numer"  value="1" max="9" min="1">
            <input type="submit" value="WYSWIETL">
        </form>
    </div>
    <div id="wizytowka">
        <?php
            $c = mysqli_connect("localhost","root","","firma");
            if(isset($_POST["numer"])){
                $numer = $_POST["numer"];
                $zapytanie = "SELECT id, imie, nazwisko, adres, miasto FROM pracownicy WHERE pracownicy.id = $numer";
                $q = mysqlI_query($c,$zapytanie);
                $wiersz = mysqli_fetch_row($q);
                echo "<img src='$wiersz[0].jpg'  alt='pracownik'>";
                echo"<h2>$wiersz[1] $wiersz[2]</h2>";
                echo"<h4>Adres</h4>";
                echo"<p>$wiersz[3], $wiersz[4]</p>";
            }else{
                echo "<img src='1.jpg'>";
                echo "<h2>$q[1] $q[2]</h2>";
                echo "<h4> $q[3]</h4>";
            }
            
            mysqli_close($c);
        ?>
    </div>
    <div id="stopka1">  
        <img src="obraz.jpg" alt="pracownicy firmy">
    </div>
    <div id="stopka2">
        <p>Autorem wizytownika jest: 11111111111</p>
        <a href=" http://agencjareklamowa543.pl/" target="_blank" rel="noopener noreferrer">Zobacz nasze realizacje</a>
    </div>
    <div id="stopka3">
        <p>Osoby proszone o podpisanie dokumentu RODO</p>
        <ol>
            <?php
                $c = mysqli_connect("localhost","root","","firma");
                $q = "SELECT imie,nazwisko FROM pracownicy WHERE pracownicy.czyRODO = 0";
                $zap = mysqli_query($c,$q);
                $ile_wierszy = mysqli_num_rows($zap);
                for($i=0;$i<$ile_wierszy;$i++){
                    $wiersz = mysqli_fetch_row($zap);

                    echo "<li>$wiersz[0] $wiersz[1]</li>";
                }
                mysqli_close($c);
            ?>
        </ol>
    </div>
</body>
</html>