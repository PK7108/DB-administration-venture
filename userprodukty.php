<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="produkty.css">
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
            <section>
                <h1>
                    Produkty
                </h1>
            </section>
            <article class="course-box">
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/B.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii B</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.8</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(152)
                        </p>
                        <p class="price">249.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitB">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $B = $_POST['submitB'];

                        if(isset($B)){
                            $_SESSION['B'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. B</p>");
                        }
                        ?>
                    </a>
                </article>
                <article class="course">
                    <a href="">
                        <img src="Zdjecia/Egzamin.jpg" alt="Samochód">
                        <h2>Podejście do egzaminu z dowolnej kategorii</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.9</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(285)
                        </p>
                        <p class="price">229.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitEgz">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $Egz = $_POST['submitEgz'];

                        if(isset($Egz)){
                            $_SESSION['Egz'] = true; 
                            echo("<p class='confirmation'>Pomyślnie dodano podejście do egzaminu dowolenj kategorii</p>");
                        }
                        ?>
                    </a>
                </article>
                <article class="course">
                    <a href="">
                        <img src="Zdjecia/samochodNaBaner.webp" alt="Samochód">
                        <h2>Pełny kurs prawa jazdy dla wszystkich kategorii</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.7</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(104)
                        </p>
                        <p class="price">999.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitAll">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $All = $_POST['submitAll'];
                    
                        if(isset($All)){
                            $_SESSION['All'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy dla wszystkich kategorii</p>");
                        }
                            
                        ?>
                    </a>
                </article>
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/C.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii C</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.6</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(124)
                        </p>
                        <p class="price">199.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitC">
                        </form>
                        <?php
                    error_reporting(0);
                    session_start();
                    $C = $_POST['submitC'];
                            
                    if(isset($C)){
                        $_SESSION['C'] = true;
                        echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. C</p>");
                    }
                            
                        ?>
                    </a>
                </article>
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/D.JPG" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii D</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.6</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(89)
                        </p>
                        <p class="price">224.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitD">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $D = $_POST['submitD'];
                           
                        if(isset($D)){
                            $_SESSION['D'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. D</p>");
                            }
                            
                        ?>
                    </a>
                </article>
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/A1.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii A1</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">5</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(131)
                        </p>
                        <p class="price">179.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitA1">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $A1 = $_POST['submitA1'];
                            
                        if(isset($A1)){
                            $_SESSION['A1'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. A1</p>");
                        }
                            
                        ?>
                    </a>
                </article>
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/A2.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii A2</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.8</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(142)
                        </p>
                        <p class="price">189.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitA2">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start();
                        $A2 = $_POST['submitA2'];
                        
                        if(isset($A2)){
                            $_SESSION['A2'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. A2</p>");
                        }
                            
                        ?>
                    </a>
                </article>
                <article class="course">
                    <!-- Driver Licence Course (DLC) -->
                    <a href="DLC.html">
                        <img src="Zdjecia/E.jpg" alt="Samochód">
                        <h2>Kurs prawa jazdy kategorii E</h2>
                        <p class="author">Patryk Kaczmarczyk</p>
                        <p><span class="opinion">4.6</span>
                            <span class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>(72)
                        </p>
                        <p class="price">164.99 zł</p>
                        <form action="" method="POST">
                            <input type="submit" value="Dodaj do koszyka" name="submitE">
                        </form>
                        <?php
                        error_reporting(0);
                        session_start(); 
                        $E = $_POST['submitE'];
                            
                        if(isset($E)){
                            $_SESSION['E'] = true;
                            echo("<p class='confirmation'>Pomyślnie dodano kurs prawa jazdy kat. E</p>");
                        }
                            
                        ?>
                    </a>
                </article>
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