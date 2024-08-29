<?php
session_start();
unset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveRule Academy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js" defer></script>
</head>

<body>
    <header id="home">
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
        <section class="main-heading">
            <section>
                <!-- Wygeneruj baner dla mojej strony, na którym będzie samochód do zdawania prawa jazdy z szczęśliwym instruktorem. Samochód niech będzie czarno - zielony. Niech będzie on po lewej stronie obrazka. Obraz ma być jak najbardziej realistyczny. Na samochodzie niech będzie napis DRA i na nim znak z L(wyszukaj ten znak w internecie, oznacza on, że w samochodzie ktoś będzie zdawać ptrawojazdy, jest ten znak zgodny z przepisami polskimi). NIech wszystko się dzieje w słoneczny dzień na drodze, wokół której jest zielona trawa, na górze słońce, prostadroga a dalej jest widok na piękne wysokie góry. Droga jest właśnie na jednej z gór. -->
                <h1>DriveRule Academy</h1>
                <p>Kursy na prawo jazdy z wszystkich kategorii z certyfikatami.</p>
                <p>Egzaminy na prawo jazdy</p>
            </section>
        </section>
    </header>
    <main id="o-nas">
        <article class="main-introduction">
            <section class="onas-text">
                <h2>O nas</h2>
                <p><strong>DriveRule Academy </strong>to ogólnopolska inicjatywa edukacyjna, która powstała po to by
                    nauka do
                    egzaminu
                    prawa
                    jazdy stała się łatwiejsza. Zajmujemy
                    się kompleksowym przygotowaniem oraz pomocą w wybraniu naszym podopiecznym ich indywidualnej
                    ścieżki
                    rozwoju, która ma
                    pozwolić im zdobyć wymarzone dokumenty. Będąc firmą z ponad 10-letnim doświadczeniem na rynku
                    edukacyjnym możemy
                    poszczycić się najwyższą skutecznością jeśli chodzi o przygotowywanie do egzaminów prawa jazdy.
                    Podanto
                    na naszej platformie można skorzystać z bazy widzy, która zawiera wszystkie niezbędne informacje
                    dotyczące przystąpienia do egzaminu i wskazówki. Co więcej masz tutaj możliwość zapisania
                    się
                    na
                    zdawanie prawa jazdy w wybranym terminie oraz poznanie własnych wyników.<span id="offer"></span>
                </p>
            </section>
            <section class="introduction-image">
                <img src="Zdjecia/Logo.png" alt="Logo firmy - ">
            </section>
            <!--
            Kategorie prawa jazdy określają, jakie pojazdy można prowadzić. Oto niektóre z nich:
           
            Kategoria AM: Uprawnia do kierowania motorowerem i można ją uzyskać po ukończeniu 14 lat.
            Kategoria A1: Pozwala na prowadzenie motocykli o pojemności skokowej silnika do 125 cm³, mocy do 11 kW i
            stosunku mocy do masy własnej do 0,1 kW/kg. Można ją zdobyć po ukończeniu 16 lat.
            Kategoria B: Uprawnia do kierowania pojazdem samochodowym o masie nie przekraczającej 3,5 tony, a także
            pojazdem z lekką przyczepą, ciągnikiem rolniczym i motocyklem o pojemności silnika do 125 cm³.
            Kategoria C: Pozwala na kierowanie pojazdami powyżej 3,5 tony własnej masy oraz zespołem pojazdów.
            Kategoria D: Uprawnia do kierowania autobusem powyżej 17 osób, ciągnikiem rolniczym i pojazdem
            wolnobieżnym1.
            Dlaczego warto mieć prawo jazdy? Oto kilka powodów:

            Swoboda poruszania się: Prawo jazdy daje niezależność i umożliwia podróżowanie tam, gdzie chcemy.
            Oszczędność czasu i pieniędzy: Nie musimy polegać na innych osobach ani na komunikacji publicznej.
            Więcej możliwości zatrudnienia: Wielu pracodawców wymaga posiadania prawa jazdy, zwłaszcza w zawodach
            związanych z transportem.
            Poprawa bezpieczeństwa na drodze: Kurs prawa jazdy uczy odpowiedzialności i technik bezpiecznej jazdy.
            Wygodne podróżowanie: Samodzielne podróżowanie jest wygodniejsze niż korzystanie z innych środków
            transportu23.
            Warto więc rozważyć naukę jazdy i zdobycie prawa jazdy, aby cieszyć się wszystkimi tymi korzyściami! 🚗🛵🚚 -->
        </article>
        <article class="offer">
            <h2>Co oferujemy?</h2>
            <article class="offer-block">
                <section>
                    <img src="Zdjecia/online-course.png" alt="Ikonka komputera">
                    <h3>Kursy teorii</h3>
                    <p>Udostępniamy oficjalne testy na prawo jazdy dla różnych kategorii, takich jak B, C, D, E itp.
                        Możesz uczyć
                        się teorii online, oglądając wykłady prowadzone przez naszych ekspertów i instruktorów nauki
                        jazdy.
                    </p>
                </section>
                <section>
                    <img src="Zdjecia/open-book.png" alt="Ikonka otwartej książki z zapaloną żarówką">
                    <h3>Baza wiedzy</h3>
                    <p>Nasza strona zawiera bogatą bazę wiedzy z pytaniami i odpowiedziami związanymi z przepisami
                        drogowymi,
                        znakami, pierwszą pomocą i innymi zagadnieniami związanymi z nauką jazdy.
                    </p>
                </section>
                <section>
                    <img src="Zdjecia/care.png" alt="Ikonka pomocnej dłoni">
                    <h3>Fachowa pomoc</h3>
                    <p id="opinie">Rozumiemy, że każdy kursant ma swoje unikalne potrzeby i tempo nauki. Dlatego oferujemy indywidualne wsparcie, które obejmuje

możliwość zadawania pytań ekspertom oraz ogólnodostępny czat dla kursantów, którzy mogą sobie zadawać pytania.
                    </p>
                </section>
            </article>
        </article>
        <article class="reviews-box">
            <section class="reviews">
                <h2>Opinie naszych kursantów</h2>
                <p>Oni już osiągnęli swój cel i dostali wymarzone prawo jazdy.</p>
                <p>Zobacz opinie uczestników kursu:</p>
                <section class="reviews-block">
                    <article class="left-reviews">
                        <section class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </section>
                        <p>4.9</p>
                        <p class="reviews-number">Na podstawie 2421 opinii</p>
                        <a href="reviews.html">Zobacz więcej opinii</a>
                    </article>
                    <article>
                        <section class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </section>
                        <p>Świetnie przygotowany materiał. Bardzo się cieszę, że za tak przystępną cenę jak za tak
                            porządny
                            kurs
                            zdałem egzamin na prawo jazdy i nauczyłem się sporo! Polecam gorąca :))</p>
                        <p class="author">Janusz Palikot</p>
                    </article>
                    <article>
                        <section class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </section>
                        <p>Niebywałe, że po tak krótkim czasie i za taką cenę zdałam prawo jazdy!</p>
                        <p class="author">Marianna Zdziłówna</p>
                    </article>
                </section>
            </section>
        </article>
        <article class="newsletter">
            <p class="above-h2">Bądźmy w kontakcie</p>
            <h2>Zapisz się do newslettera!</h2>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Adres e-mail">
                <input type="submit" value="Zapisz się!"><br>
                <section>
                    <section class="checkbox">
                        <input type="checkbox" id="check" onclick="zmianaTła()">
                        <span class="checkmark"></span>
                        <label for="check">Chcę otrzymywać na mój adres e-mail informacje o nowościach, promocjach,
                            produktach
                            lub DriveRule Academy.</label>
                    </section>
                </section>
            </form>
        </article>
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
    </main>
</body>

</html>