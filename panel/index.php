<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panel administratora</title>
</head>
<body>
    <div class="baner"><h3>Potral Społecznościowy-panel administratora</h3></div>
    <div class="lewy">
        <h4>Użytkownicy</h4>
        <?php
           $con = new mysqli("127.0.0.1","root","","dane4");
            $res = ("SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby limit 30");
            $cos = mysqli_query($con, $res);
            while($wiersz=mysqli_fetch_array($cos)){
                $wiek = 2023 - $wiersz[3];
                echo "$wiersz[0]. $wiersz[1] $wiersz[2], $wiek lat <br>";
        }
        ?>
    </div>
    <div class="prawy">
        <h4>Podaj id użytkownika</h4>
        <form action="index.php" method="post">
            <input type="number" name="id">
            <button>ZOBACZ</button>
        </form>
        <hr>
        <?php
        if(isset($_POST["id"])){
            $res1 = ("SELECT id, imie, nazwisko, rok_urodzenia, opis, zdjecie FROM osoby INNER JOIN hobby ON osoby.id=hobby.id WHERE osoby.id=".$_POST["id"].";");
            $cos1 = mysqli_query($con, $res1);
            $wynik = mysqli_fetch_array($cos1);
        }
        echo ();
        ?>
    </div>
    <div class="stopka"><p>Stronę wykonał: Paweł Lewandowski</p></div>
</body>
</html>