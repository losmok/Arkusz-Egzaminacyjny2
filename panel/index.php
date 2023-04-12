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
        <script>
            $con = new mysqli('127.0.0.1','root','dane4');
            $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby WHERE id BETWEEN 0 AND 30;";
            $res = $con->query($sql);
            $rows $res->fetch_all()
            echo"<ol>";
            for($i=0,$i<10;$i++) {
                echo"<li>".$cos[$i][0]." ".cos[$i][1]." ".cos[$i][2]."</li>"
            }
        </script>
    </div>
    <div class="prawy">
        <h4>Podaj id użytkownika</h4>
        <form action="index.php" method="post">
            <input type="number" name="poleid">
            <button>ZOBACZ</button>
        </form>
        <hr>
    </div>
    <div class="stopka"><p>Stronę wykonał: Paweł Lewandowski</p></div>
</body>
</html>