<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Biblioteka publiczna
    </title>
</head>
<body>
    <div class="baner">
        <h1>
            Biblioteka w Książkowicach Wielkich
        </h1>
    </div>
    <div class="lewy">
        <h3>
            Polecamy z dzieła autorów:
        </h3>
        <ol>
            <?php
            $connect = mysqli_connect("localhost", "root", "", "biblioteka");
            $quest = "SELECT `imie`,`nazwisko` FROM `autorzy` ORDER BY `nazwisko` ASC;";
            $prievanwser = mysqli_query($connect, $quest);
            while ($row = mysqli_fetch_array($prievanwser)) {
            echo"<li>".$row["0"]." ".$row["1"]."</li>";
            }
            mysqli_close($connect);
            ?>
        </ol>
    </div>
    <div class="srodkowy">
        <h3>
            ul. Czytelnika 25, Książkowice&nbsp;Wielkie
        </h3>
        <a href="mailto: sekretariat@biblioteka.pl">
            <p>
                Napisz do nas
            </p>
        </a>
        <img src="biblioteka.png" alt="książki">
    </div>
    <div class="prawy1">
        <h3>
            Dodaj czytelnika
        </h3>
        <form action="biblioteka.php" method="post">
            imię: 
            <input type="text" name="imie">
            <br>
            nazwisko: 
            <input type="text" name="nazwisko">
            <br>
            symbol: 
            <input type="number" name="symbol">
            <br>
            <input type="submit" value="dodaj">
        </form>
    </div>
    <div class="prawy2">
        <!-- SKRYPT 2 -->
        <?php
        error_reporting(0);
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $symbol = $_POST['symbol'];
        $connect = mysqli_connect("localhost", "root", "", "biblioteka");
        $quest = "INSERT INTO `czytelnicy`(`imie`, `nazwisko`, `kod`) VALUES ('$imie','$nazwisko','$symbol');";
        $anwser = mysqli_query($connect, $quest);
        echo "Czytelnik ".$imie." ".$nazwisko." został(a) dodany do bazy danych";
        mysqli_close($connect);
        ?>
    </div>
    <div class="stopka">
        <p>
            Projekt strony: .witys
        </p>
    </div>





</body>
</html>