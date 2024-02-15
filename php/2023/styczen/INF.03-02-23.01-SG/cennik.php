<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
</head>
<body>
    <div class="baner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div class="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </div>
    <div class="srodek">
        <a href="cennik.php">CENNIK</a>
        <table>
        <?php
        $connect = mysqli_connect("localhost","root","","wynajem");
        $quest = "SELECT * FROM pokoje;";
        $query = mysqli_query($connect, $quest);
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr><td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td></tr>";
        }
        ?>
        </table>
    </div>
    <div class="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </div>
    <div class="stopka">
        <p>Stronę opracował: .witys</p>
    </div>
</body>
</html>