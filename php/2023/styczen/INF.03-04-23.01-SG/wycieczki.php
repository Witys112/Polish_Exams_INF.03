<?php
    $connect = mysqli_connect("localhost","root","","biuro");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
</head>
<body>
    <div class="baner">
        <h1>BIURTO TURYSTYCZNE</h1>
    </div>
    <div class="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ol>
            <!-- SKRYPT 1 -->
            <?php
            $quest = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = TRUE;";
            $query = mysqli_query($connect, $quest);
            while ($row = mysqli_fetch_array($query)) {
                echo $row["0"].". dnia ".$row["1"]." jedziemy do ".$row["2"].", cena: ".$row["3"]."<br>";
            }
            ?>
        </ol>
    </div>
    <div class="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
            </tr>
            <tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            </tr>
        </table>
    </div>
    <div class="srodek">
        <h2>Nasze zdjęcia</h2>
        <!-- SKRYPT 2 -->
        <?php
        $quest = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` DESC;";
        $query = mysqli_query($connect, $quest);
        while ($row = mysqli_fetch_array($query)) {
            echo "<img src=".$row['0']." alt=".$row['1'].">";
        }
        ?>
    </div>
    <div class="prawy">
        <h2>Skontaktuj się</h2>
        <a href="mailto: turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111222333</p>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: .witys </p>
    </div>








</body>
</html>