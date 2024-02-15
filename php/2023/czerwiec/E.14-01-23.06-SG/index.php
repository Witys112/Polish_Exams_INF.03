<?php
    $connect = mysqli_connect("localhost","root","","baza");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dane o zwierzętach
    </title>
</head>
<body>
    <div class="baner">
        <h1>ATLAS ZWIERZĄT</h1>
    </div>
    <div class="formularz">
        <h2>Gromady</h2>
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <form method="post" action="index.php">
            <label for="gromada">Wybierz gromadę</label>
            <input type="number" name="gromada">
            <input type="submit" value="Wyświetl">
        </form>
    </div>
    <div class="glewy">
        <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
    </div>
    <div class="gsrodek">
        <!-- SKRYPT 1 -->
        <?php
        $gromada = $_POST['gromada'];
        $quest = "SELECT `gatunek`, `wystepowanie` FROM `zwierzeta`, gromady WHERE zwierzeta.`Gromady_id` = gromady.id AND gromady.nazwa = 'ryby';";
        ?>
    </div>
    <div class="gprawy">
        <h2>
            Wszystkie zwierzęta w bazie
        </h2>
        <!-- SKRYPT 2 -->
    </div>
    <div class="stopka">
        <a href="atlas-zwierzat.pl" target="_blank">Poznaj inne strony o zwierzętach</a>
        autor Atlasu zwierząt: .witys
    </div>



</body>
</html>
<?php
    mysqli_close($connect);
?>