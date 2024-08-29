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
    <link rel="stylesheet" href="koszyk.css">
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
        <section>
            <section>
                <h1>
                    Twój koszyk
                </h1>
            </section>
                <article class="course-box">
                <?php
            session_start();
            error_reporting(0);
            if($_SESSION['A1'] == 1){
                error_reporting(0);
                session_start();
                $A1 = $_POST["submitA1"];
                $Delete = $_POST["deleteA1"];
                if(isset($A1)){
                    $_SESSION["BuyedA1"] = true;
                    unset($_SESSION["A1"]);
                }
                elseif(isset($Delete)) unset($_SESSION["A1"]);
                else echo('<article class="course">
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
                        <input type="submit" value="Kup" name="submitA1">
                        <input type="submit" value="Usuń" name="deleteA1">
                    </form>
                    </a>
                </article>');
            }
            if($_SESSION['A2'] == 1){
                error_reporting(0);
                session_start();
                $A2 = $_POST["submitA2"];
                $Delete = $_POST["deleteA2"];
                if(isset($A2)){
                    $_SESSION["BuyedA2"] = true;
                    unset($_SESSION["A2"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["A2"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitA2">
                            <input type="submit" value="Usuń" name="deleteA2">
                        </form>
                    </a>
                </article>');
            }
            if($_SESSION['B'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitB"];
                $Delete = $_POST["deleteB"];
                if(isset($B)){
                    $_SESSION["BuyedB"] = true;
                    unset($_SESSION["B"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["B"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitB">
                            <input type="submit" value="Usuń" name="deleteB">
                        </form>
                    </a>
                </article>');
            }
            if($_SESSION['C'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitC"];
                $Delete = $_POST["deleteC"];
                if(isset($B)){
                    $_SESSION["BuyedC"] = true;
                    unset($_SESSION["C"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["C"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitC">
                            <input type="submit" value="Usuń" name="deleteC">
                        </form>
                    </a>
                </article>');
            }
            if($_SESSION['D'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitD"];
                $Delete = $_POST["deleteD"];
                if(isset($B)){
                    $_SESSION["BuyedD"] = true;
                    unset($_SESSION["D"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["D"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitD">
                            <input type="submit" value="Usuń" name="deleteD">
                        </form>
                    </a>
                </article>'); 
            }
            if($_SESSION['E'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitE"];
                $Delete = $_POST["deleteE"];
                if(isset($B)){
                    $_SESSION["BuyedE"] = true;
                    unset($_SESSION["E"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["E"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitE">
                            <input type="submit" value="Usuń" name="deleteE">
                        </form>
                    </a>
                </article>');
            }
            if($_SESSION['All'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitAll"];
                $Delete = $_POST["deleteAll"];
                if(isset($B)){
                    $_SESSION["BuyedAll"] = true;
                    unset($_SESSION["All"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["All"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitAll">
                            <input type="submit" value="Usuń" name="deleteAll">
                        </form>
                    </a>
                </article>');
            }
            if($_SESSION['Egz'] == 1){
                error_reporting(0);
                session_start();
                $B = $_POST["submitEgz"];
                $Delete = $_POST["deleteEgz"];
                if(isset($B)){
                    $_SESSION["BuyedEgz"] = true;
                    unset($_SESSION["Egz"]);
                    }
                    elseif(isset($Delete)) unset($_SESSION["Egz"]);
                    else echo('<article class="course">
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
                            <input type="submit" value="Kup" name="submitEgz">
                            <input type="submit" value="Usuń" name="deleteEgz">
                        </form>
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