<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl_2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
</head>
<body>
    <div class="baner">
    <h1>
        Portal dla wędkarzy
    </h1>
    </div>
    <div class="lewy1">
        <h3>
            Ryby zamieszkujące rzeki
        </h3>
        <ol>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "wedkowanie");
                $quest = "SELECT `nazwa`, lowisko.akwen, lowisko.wojewodztwo FROM `ryby`, lowisko WHERE ryby.id=lowisko.Ryby_id;";
                $prievanwser = mysqli_query($connect, $quest);
                while($anwser = mysqli_fetch_array($prievanwser)){
                    echo "<li>".$anwser["0"]." pływa w rzece".$anwser["1"]." ".$anwser["2"]."</li>";
                }    
                mysqli_close($connect);
            ?>
        </ol>
    </div>
    <div class="lewy2">
        <h3>
            Ryby zamieszkujące rzeki
        </h3>
        <table>
            <tr>
                <th>
                    L.p.
                </th>
                <th>
                    Gatunek
                </th>
                <th>
                    Występowanie
                </th>
            </tr>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "wedkowanie");
                $quest = "SELECT `id`,`nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia`=1;";
                $prievanwser = mysqli_query($connect, $quest);
                while($anwser = mysqli_fetch_array($prievanwser)){
                    echo "<tr> <td>".$anwser["0"]."</td> <td>".$anwser["1"]."</td> <td>".$anwser["2"]."</td> </tr>";
                }    
                mysqli_close($connect);
            ?>
        </table>
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="\Polish_Exams_INF.03\php\INF.03-01-22.06-SG">
            Pobierz kwerendy
        </a>
    </div>
    <div class="stopka">
        <p>
            Stronę wykonał: .witys
        </p>
    </div>
</body>
</html>