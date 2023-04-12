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
            $id = $_POST["id"];
            $res1 = "SELECT osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby, hobby WHERE osoby.Hobby_id=hobby.id AND osoby.id = ".$_POST["id"]."";
            $cos1 = mysqli_query($con, $res1);
            $wiersz1 = mysqli_fetch_array($cos1);
            echo "<h2>$id $wiersz1[0] $wiersz1[1]</h2><br>";
            echo "<img src='$wiersz1[4]' alt='$id'><br>";
            echo "Rok urodzenia: $wiersz1[2] <br>";
        }
        ?>
    </div>
    <div class="stopka"><p>Stronę wykonał: Paweł Lewandowski</p></div>
</body>
</html>