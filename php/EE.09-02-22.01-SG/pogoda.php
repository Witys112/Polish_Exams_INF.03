<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Prognoza pogody Wrocław
    </title>
</head>
<body>
    <div class="baner">
        <div class="blewy">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="bsrodek">
            <h1>
                Prognoza dla Wrocławia
            </h1>
        </div>
        <div class="bprawy">
            <p>
                maj, 2019 r.
            </p>
        </div>
    </div>
    <div class="glowny">
        <table>
            <tr>
                <th>
                    DATA
                </th>
                <th>
                    TEMPERATURA W NOCY
                </th>
                <th>
                    TEMPERATURA NA DZIEŃ
                </th>
                <th>
                    OPADY [mm/h]
                </th>
                <th>
                    CIŚNIENIE [hPa]
                </th>
            </tr>
                <?php 
                $connect=mysqli_connect("localhost","root","","prognoza");
                $quest="SELECT * FROM `pogoda` WHERE `miasta_id`= 1 ORDER BY data_prognozy ASC";
                $prievanwser=mysqli_query($connect, $quest);
                while($anwser = mysqli_fetch_row($prievanwser)){
                    echo "<tr>
                    <td>".$anwser[2]."</td>
                    <td>".$anwser[3]."</td>
                    <td>".$anwser[4]."</td>
                    <td>".$anwser[5]."</td>
                    <td>".$anwser[6]."</td>
                    </tr>";
                }
                mysqli_close($connect);
                ?>
        </table>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div class="prawy">
        <a href="kwerendy.txt">
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