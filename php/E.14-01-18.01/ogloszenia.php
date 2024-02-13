<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styl1.css">
        <title>
            Dodaj ogłoszenie
        </title>
    </head>
    <body>
        <div class="baner">
            <h1>
                Portal ogłoszeniowy
            </h1>
        </div>
        <div class="lewy">
                <h2>
                    kategorie ogłoszeń
                </h2>
                <ol>
                    <li>
                        książki
                    </li>
                    <li>
                        muzyka
                    </li>
                    <li>
                        filmy
                    </li>
                </ol>
                <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
                <br>
                <table>
                    <tr>
                        <th>
                            Liczba ogłoszeń
                        </th>
                        <th>
                            Cena ogłoszenia
                        </th>
                        <th>
                            Bonus
                        </th>
                    </tr>
                    <tr>
                        <td>
                            1 - 10
                        </td>
                        <td>
                            1 PLN
                        </td>
                        <td rowspan="3">
                            Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11 - 50
                        </td>
                        <td>
                            0,80 PLN
                        </td>
                    </tr>
                    <tr>
                        <td>
                            51 i więcej
                        </td>
                        <td>
                            0,60 PLN
                        </td>
                    </tr>
                </table>
        </div>
        <div class="prawy">
            <h2>
                Ogłoszenia kategorii książki
            </h2>
            <?php 
				$connect = mysqli_connect('localhost','root','','ogloszenia');
				$quest1="SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1";
				$quest2="SELECT telefon FROM uzytkownik inner JOIN ogloszenie On uzytkownik.id = ogloszenie.uzytkownik_id ";
				$prievanwser1 = mysqli_query($connect,$quest1);
				$prievanwser2 = mysqli_query($connect,$quest2);
				while ($anwser1 = mysqli_fetch_array($prievanwser1)) 
				{
					$anwser2 = mysqli_fetch_array($prievanwser2);
					echo "<h3>".$anwser1[0]." ".$anwser1[1]."</h3>";
					echo "<p>".$anwser1[2]."</p>";
					echo "<p>"."Telefon kontaktowy: ".$anwser2[0];
				}
				mysqli_close($connect);
			 ?>
        </div>
        <div class="stopka">
            <p>
                Portal ogłoszeniowy opracował: .witys 
            </p>
        </div>
    </body>
</html>