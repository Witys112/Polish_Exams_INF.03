<?php
    $connect = mysqli_connect("localhost", "root", "", "psy");
    
    if (!$connect) {
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
</head>
<body>
    <div class="baner">
        <h1>Forum wielbicieli psów</h1>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="foksterier">
    </div>
    <div class="prawy1">
        <h2>Zapisz się</h2>
        <form method="post" action="logowanie.php">
            <label for="login">login: </label>
            <input type="text" name="login">
            <br>
            <label for="haslo">hasło:</label>
            <input type="password" name="haslo">
            <br>
            <label for="powtorz_haslo">powtórz hasło:</label>
            <input type="password" name="powtorzhaslo">
            <br>
            <input type="submit" value="Zapisz">
        </form>
        <?php
            function hashPassword($password) {
                return sha1($password);
            }
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (empty($_POST['login']) || empty($_POST['haslo']) || empty($_POST['powtorzhaslo'])) {
                    echo '<p>Wypełnij wszystkie pola</p>';
                } else {
                    $login = $_POST['login'];
                    $password = $_POST['haslo'];
                    $repeatPassword = $_POST['powtorzhaslo'];
                    
                    if ($password != $repeatPassword) {
                        echo '<p>Hasła nie są takie same, konto nie zostało dodane</p>';
                    } else {
                        $checkLoginQuery = "SELECT * FROM uzytkownicy WHERE login = '$login'";
                        $result = mysqli_query($connect, $checkLoginQuery);
                        
                        if (mysqli_num_rows($result) > 0) {
                            echo '<p>Login występuje w bazie danych, konto nie zostało dodane</p>';
                        } else {
                            $hashedPassword = hashPassword($password);
                            $addUserQuery = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login', '$hashedPassword')";
                            if (mysqli_query($connect, $addUserQuery)) {
                                echo '<p>Konto zostało dodane</p>';
                            } else {
                                echo '<p>Błąd dodawania konta do bazy danych</p>';
                            }
                        }
                    }
                }
            }
        ?>
    </div>
    <div class="prawy2">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>Właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div class="stopka">Stronę wykonał: .witys</div>
</body>
</html>

<?php
    mysqli_close($connect);
?>