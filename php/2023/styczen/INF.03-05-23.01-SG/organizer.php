<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sierpniowy kalendarz
    </title>
</head>
<body>
    <div class="baner1">
        <h1>
            Organizer: SIERPIEŃ
        </h1>
    </div>
    <div class="baner2">
        <form action="organizer.php" method="post">
            Zapisz Wydarzenie:
            <input type="text" name="wydarzenie">
            <input type="submit" value="OK">
        </form>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "kalendarz");
        $wydarzenie = $_POST['wydarzenie'];
        $quest = "UPDATE `zadania` SET `wpis`='$wydarzenie' WHERE `dataZadania`='2020-08-09';";
        $anwser = mysqli_query($connect, $quest);
        mysqli_close($connect);
        ?>
    </div>
    <div class="baner3">
        <img src="logo2.png" alt="sierpień">
    </div>
    <div class="glowny">
        <?php
        $connect = mysqli_connect("localhost", "root", "", "kalendarz");
        $quest = "SELECT `dataZadania`,`wpis` FROM `zadania` WHERE `miesiac`='sierpien';";
        $prievanwser = mysqli_query($connect, $quest);
        while ($row = mysqli_fetch_array($prievanwser)){
            echo
            "<div class='kalendarz'> 
            <h5>"
            .$row['0'].
            "</h5> 
            <p>"
            .$row['1'].
            "</p> 
            </div>";
        }
        mysqli_close($connect);
        ?>
    </div>
    <div class="stopka">
        <p>
            Stronę wykonał: .witys
        </p>
    </div>


</body>
</html>