<?php
session_start();
unset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="logowanie.css">
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
        <h1>Zaloguj się do portalu DRA</h1>
        <section class="box">
            <section class="form">
                <form action="" method="POST">
                    <h2>Podaj dane</h2>
                    <input type="text" id="login" name="login" placeholder="Login" require><br>
                    <input type="password" id="password" name="password" placeholder="Hasło" require><br>
                    <input type="submit" value="Zaloguj">
                    <hr>
                    <p>Nie masz konta? <a href="rejestracja.php">Utwórz je!</a></p>
                    <p>Nie możesz się zalogować? <a href="">Przypomnij hasło tutaj</a></p>
                </form>
                <?php 
                error_reporting(0);
                $login = $_POST['login'];
                $password = $_POST['password'];
                session_start();

                $con = mysqli_connect("localhost","root","","dra");
                $query = "SELECT * FROM dra_users WHERE `login` = '$login' AND `haslo` = '$password';";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                
                if(isset($row['login'])){
                    $_SESSION['login'] = $row['login'];
                    $i = $_COOKIE['odwiedziny'];
                    setcookie('odwiedziny', $i + 1, time()+ 3600 * 24 * 365);
                    if($row['login'] == "Admin"){
                        header("location:adminPanel.php");
                    }
                    else{
                        header("location:userPanel.php");
                    }
                }
                if(!(isset($row['login'])) && isset($login)) echo("<p class='return'>Nieprawidłowy login lub hasło</p>");
                mysqli_close($con);
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