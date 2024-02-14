<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Hurtownia szkolna
    </title>
</head>
<body>
    <div class="baner">
        <h1>
            Hurtownia z najlepszymi cenami
        </h1>
    </div>
    <div class="lewy">
        <h2>
            Nasze cenu
        </h2>
        <table>
            <?php
            $connect = mysqli_connect("localhost","root","","sklep");
            $quest = "SELECT `nazwa`,`cena` FROM `towary` LIMIT 4;";
            $prievanwser = mysqli_query($connect, $quest);
            while ($row = mysqli_fetch_array($prievanwser)){
                echo "<tr> <td>". $row["0"] ."</td> <td>". $row["1"] . "</td> </tr>";
            }
            mysqli_close($connect);
            ?>
        </table>
    </div>
    <div class="srodkowy">
        <h2>
            Koszt zakupów
        </h2>
        <form method="post" action="index.php">
            <label for="artykuly">
                wybierz artykuł
            </label>
            <select name="artykuly">
                <option value="Zeszyt 60 kartek">
                    Zeszyt 60 kartek
                </option>
                <option value="Zeszyt 32 kartki">
                    Zeszyt 32 kartki
                </option>
                <option value="Cyrkiel">
                    Cyrkiel

                </option>
                <option value="Linijka 30 cm">
                    Linijka 30 cm
                </option>
            </select>
            <label for="liczba">
                liczba sztuk: 

            </label>
            <input type="number" name="ile">
            <input type="submit" value="OBLICZ">
        </form>
        <?php
        error_reporting(0);
            $towar = $_POST['artykuly'];
            $liczba = $_POST['ile'];
            $connect = mysqli_connect("localhost","root","","sklep");
            $quest = "SELECT `cena` FROM `towary` WHERE `nazwa` = '$towar';";
            $prievanswer = mysqli_query($connect, $quest);
            while ($row = mysqli_fetch_array($prievanswer)){
                $cena = $liczba * $row["0"];
                
                
                echo "wartość zakupów: $cena";
            }
            
            mysqli_close($connect);
            ?>
    </div>
    <div class="prawy">
        <h2>
            Kontakt
        </h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>
            e-mail 
            <a href="mailto: hurt@poczta2.pl">
                hurt@poczta2.pl
            </a>
        </p>
    </div>
    <div class="stopka">
        <h4>
            Witrynę wykonał: .witys
        </h4>
    </div>
</body>
</html>