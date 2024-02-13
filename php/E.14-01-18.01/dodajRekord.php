<?php

$kategoria=$_POST['kategoria'];
$podkategoria=$_POST['podkategoria'];
$tytul=$_POST['tytul'];
$tresc=$_POST['tresc'];

$bd=mysqli_connect("localhost","root","","ogloszenia");

$zapytanie = "INSERT INTO `ogloszenie`(`kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES ('$kategoria','$podkategoria','$tytul,','$tresc')";

mysqli_query($bd,$zapytanie);

echo "Wykonano prawidłowo";

mysqli_close($bd);
?>