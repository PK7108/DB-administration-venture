<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
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
                <a href="index.php#o-nas">O nas</a>
                <a href="index.php#offer">Oferta</a>
                <a href="produkty.php">Produkty</a>
                <a href="bazawiedzy.html">Baza wiedzy</a>
                <a href="index.php#opinie">Opinie</a>
            </section>
            <!-- Sekcja prawa -->
            <section>
                <a href="logowanie.php" target="_blank">Zaloguj się</a>
                <a href="koszyk.php"><i class="bi bi-cart3"></i>Koszyk</a>
            </section>
        </nav>
    </header>
    <main>
        <img src="Zdjecia/Logo.png" alt="Logo firmy DRA(DriveRule Academy)">
        <h1>Zarejestruj się do portalu DRA</h1>
        <section class="box">
            <section class="form">
                <form action="" method="POST">
                    <h2>Dane uczestnika egzaminu</h2>
                    <p>Proszę podaj poprawne dane - te dane zostaną użyte na dokumentach.</p>
                    <input type="text" name="imie" placeholder="Imię"><br>
                    <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
                    <input type="email" name="email" placeholder="E-mail"><br>
                    <input type="tel" name="tel" placeholder="Telefon"><br>
                    <input type="text" name="login" placeholder="Login"><br>
                    <input type="password" name="password" placeholder="Hasło">
                    <p>Hasło minimum 6 znaków</p>
                    <section class="checkbox">
                        <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox"> Chcę otrzymywać
                            informacje o promocjach</label><br>
                    </section>
                    <input type="submit" value="Załóż darmowe konto">
                    <section>
                        <p>Klikając "Załóż darmowe konto" akceptujesz regulamin zakupów oraz politykę prywatności sklepu
                            internetowego
                            DriveRule Academy.pl</p>
                    </section>
                </form>
                <?php
                error_reporting(0);
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $login = $_POST['login'];
                $password = $_POST['password'];

                if (!(empty($imie) && empty($nazwisko) && empty($email) && empty($login) && empty($password) && empty($tel))){
                    if((preg_match(('/^[A-ZĄĆĘŚĆÓŃŻŹŁ]{1}[a-ząęńóżźćśł]*$/'),$imie)) && (preg_match(('/^[A-ZĄĆĘŚĆÓŃŻŹŁ]{1}[a-ząęńóżźćśł]*$/'),$nazwisko)) && (preg_match(('/^([a-z]|[A-Z]|[0-9]){2,20}@([a-z]|[A-Z]|[0-9]){2,10}.(pl|com)$/'),$email)) && (preg_match(('/^[0-9]{9}$/'),$tel))){
                        $con = mysqli_connect("localhost", "root", "", "dra");
                        $query = "Insert into `dra_users` values('', '$imie', '$nazwisko', '$tel', '$email', '$password', '$login','','','');";
                        mysqli_query($con, $query);
                        mysqli_close($con);

                        setcookie('odwiedziny', 0, time()+ 3600 * 24 * 365);
                    }
                }
                ?>
            </section>
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