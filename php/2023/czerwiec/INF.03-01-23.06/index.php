<?php
    $connect = mysqli_connect("localhost","root","","sklep");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sklep dla uczniów
    </title>
</head>
<body>
    <div class="baner">
        <h1>
            Dziesiejsze promocje naszego sklepu
        </h1>
    </div>
    <div class="lewy">
        <h2>
            Taniej o 30%
        </h2>
        <ol>
            <?php
            $quest = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
            $query = mysqli_query($connect, $quest);
            while ($row = mysqli_fetch_array($query)) {
                echo"<li>".$row["0"]."</li>";
            }
            ?>
        </ol>
    </div>
    <div class="srodkowy">
        <h2>
            Sprawdź cenę
        </h2>
        <form method="post" action="index.php">
            <select name="towary">
                <option value="Gumka do mazania">
                    Gumka do mazania
                </option>
                <option value="Cienkopis">
                    Cienkopis
                </option>
                <option value="Pisaki 60 szt.">
                    Pisaki 60 szt.
                </option>
                <option value="Markery 4 szt.">
                    Markery 4 szt.
                </option>
            </select>
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
        $towary = $_POST['towary'];
        $quest = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towary';";
        $query = mysqli_query($connect, $quest);
        while ($row = mysqli_fetch_array($query)) {
            echo"<div class='skrypt2'> Cena regularna: ".$row["0"]."<br>";
            $cena = $row["0"] * 0.7;
            echo"Cena w promocji 30% ".$cena."</div>";
        }
            ?>
    </div>
    <div class="prawy">
        <h2>
            Kontakt
        </h2>
        <p>
            e-mail: 
            <a href="mailto: bok@sklep.pl">
                bok@sklep.pl
            </a>
        </p>
        <img src="promocja.png" alt="promocja">
    </div>
    <div class="stopka">
        <h4>
            Autor strony: .witys
        </h4>
    </div>
</body>
</html>
<?php
    mysqli_close($connect);
?>