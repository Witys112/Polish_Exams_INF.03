<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li>
                <a href="index.html">Strona główna</a>
            </li>
            <li>
                <a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a>
            </li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form method="post" action="znajdz.php">
            <label for="miasto">Podaj nazwę miasta: </label>
            <input type="text" name="miasto">
            <br>
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
        $miasto = $_POST['miasto'];
        $connect = mysqli_connect("localhost","root","","kwiaciarnia");
        $quest = "SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE `miasto` = '$miasto';";
        $query = mysqli_query($connect, $quest);
        while ($row = mysqli_fetch_array($query)) {
            echo $row['0'].", ".$row['1'];
        }
        mysqli_close($connect);
        ?>
    </div>
    <div class="stopka">
        <p>Stronę opracował: .witys</p>
    </div>
</body>
</html>