<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <nav>
            <section class="myLinks">
                <!-- Sekcja lewa -->
                <!-- logo -->
                <img src="Zdjecia/DRA.png" alt="Logo firmy DRA(DriveRule Academy)">
                <a href="index.php#home">Home</a>
                <a href="adminPanel.php">Kokpit</a>
                <a href="adminprodukty.php">Produkty</a>
                <a href="adminbazawiedzy.html">Baza wiedzy</a>
            </section>
            <!-- Sekcja prawa -->
            <section>
                <a href="adminkonto.php" target="_blank">Moje konto</a>
                <a href="index.php">Wyloguj się</a>
            </section>
        </nav>
    </header>
    <main>
        <section>
            

            <img src="Zdjecia/Logo.png" alt="Logo firmy DRA(DriveRule Academy)">
        <?php
                error_reporting(0);
                if($_COOKIE['odwiedziny'] > 1) echo("<h1>Witamy ponownie!</h1>");
                else echo("<h1>Witamy!</h1><p class='subtitle'>W tym miejscu możesz zmieniać ustawienia swojego konta.</p>");

            ?>
        <section class="box">
            <section class="form">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2>Dane administratora DRA</h2>
                    <p class="subheading">Proszę podaj poprawne dane - te dane zostaną użyte na dokumentach.</p>
                    <input type="text" name="imie" placeholder="Imię" require><br>
                    <input type="text" name="nazwisko" placeholder="Nazwisko" require><br>
                    <input type="email" name="email" placeholder="E-mail" require><br>
                    <input type="tel" name="tel" placeholder="Telefon" require><br>
                    <input type="text" name="login" placeholder="Login" require><br>
                    <input type="password" name="password" placeholder="Hasło" require>
                    <p>Hasło minimum 6 znaków</p>
                    <section class="select">
                        <select name="miasto" require>
                            <option value="Warszawa">Warszawa</option>
                            <option value="Kraków">Kraków</option>
                            <option value="Wrocław">Wrocław</option>
                            <option value="Gdańsk">Gdańsk</option>
                            <option value="Łódź">Łódź</option>
                            <option value="Poznań">Poznań</option>
                        </select><br>
                    </section>
                    <section class="file">
                        <label for="foto">Zdjęcie: <input type="file" name="file" require></label><br>
                    </section>
                    <section class="description">
                        <textarea name="opis" id="" placeholder="Napisz coś o swoim doświadczeniu za kierownicą, co lubisz robić i ile masz lat." cols="36" rows="5" require></textarea><br>
                    </section>
                    <input type="submit" value="Zmień">
                    <input type="reset" value="Wyczyść">
                </form>
                <?php
                error_reporting(0);
                session_start();
                
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                $miasto= $_POST['miasto'];
                $opis = $_POST['opis'];

                $file = $_POST['file'];
                $lok = $_FILES['file']['name'];
                $przeniesienie = move_uploaded_file($_FILES['file']['tmp_name'],"C:/xampp/htdocs/projekt/Profilowe/$lok");


                if((preg_match(('/^[A-ZĄĆĘŚĆÓŃŻŹŁ]{1}[a-ząęńóżźćśł]*$/'),$imie)) && (preg_match(('/^[A-ZĄĆĘŚĆÓŃŻŹŁ]{1}[a-ząęńóżźćśł]*$/'),$nazwisko)) && (preg_match(('/^([a-z]|[A-Z]|[0-9]){0,30}@([a-z]|[A-Z]|[0-9]){2,10}.(pl|com)$/'),$email)) && (preg_match(('/^[0-9]{9}$/'),$tel))){
                    $con = mysqli_connect("localhost", "root", "", "dra");
                    $query = "Update dra_users SET imie ='$imie', nazwisko='$nazwisko', telefon = '$tel', email = '$email', login = '$login', haslo = '$password', Miasto = '$miasto', Opis = '$opis', Zdjęcie='$lok' where login = '$_SESSION[login]';";
                    mysqli_query($con, $query);
                    mysqli_close($con);
                }
                ?>
        </section>
    </main>
    <footer>
        <section class="left">
            <section>
                <h3>Adres</h3>
                <p>Polska</p>
                <p>ul. Święty Marcin 29/8</p>
                <p>61-806 Poznań</p>
            </section>
            <section class="kontakt">
                <h3>Skontaktuj się</h3>
                <p>E-mail: kontakt@prawo-jazdy-360.pl</p>
                <p>Telefon: 790-747-360</p>
            </section>
            <section class="nav">
                <h3>Na skróty</h3>
                <a href="index.php#home">Home</a>
                <a href="index.php#o-nas">O nas</a>
                <a href="index.php#offer">Oferta</a>
                <a href="produkty.php">Produkty</a>
                <a href="bazawiedzy.html">Baza wiedzy</a>
                <a href="index.php#opinie">Opinie</a>
            </section>
        </section>
        <section class="right">
            <h3>Obserwuj nas na mediach społecznościowych</h3>
            <section>
                <a href="#" class="Link2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="Link2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="Link2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="Link2"><i class="bi bi-whatsapp"></i></a>
            </section>
        </section>
        <section></section>
    </footer>
</body>

</html>