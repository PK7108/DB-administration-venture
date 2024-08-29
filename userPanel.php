<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="uzPanel.css">
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
                <a href="userPanel.php">Kokpit</a>
                <a href="userprodukty.php">Produkty</a>
                <a href="userbazawiedzy.html">Baza wiedzy</a>
            </section>
            <!-- Sekcja prawa -->
            <section>
                <a href="userkoszyk.php"><i class="bi bi-cart3"></i>Koszyk</a>
                <a href="konto.php" target="_blank">Moje konto</a>
                <a href="index.php">Wyloguj się</a>
            </section>
        </nav>
    </header>
    <main>
        <section>
        <h1>Platforma e-learningowa</h1>
        <article class="course-box">
                <?php
            session_start();
            error_reporting(0);
            if($_SESSION["BuyedA1".$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                <!-- Driver Licence Course (DLC) -->
                <a href="DLC.html">
                    <img src="Zdjecia/A1.jpg" alt="Samochód">
                    <h2>Kurs prawa jazdy kategorii A1</h2>
                    <p class="author">Patryk Kaczmarczyk</p>
                    <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedA2'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/A2.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii A2</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedB'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/B.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii B</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedC'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/C.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii C</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedD'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/D.JPG" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii D</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>'); 
            }
            if($_SESSION['BuyedE'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/E.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii E</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedAll'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <a href="">
                        <img src="Zdjecia/samochodNaBaner.webp" alt="Samochód">
                        <h2>Pełny kurs prawa jazdy dla wszystkich kategorii</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            if($_SESSION['BuyedEgz'.$_SESSION['login']] == 1){
                error_reporting(0);
                session_start();
                echo('<article class="course">
                    <a href="">
                        <img src="Zdjecia/Egzamin.jpg" alt="Samochód">
                        <h2>Podejście do egzaminu z dowolnej kategorii</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <input type="submit" value="Wejdź">
                    </a>
                </article>');
            }
            ?>
            </article>
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