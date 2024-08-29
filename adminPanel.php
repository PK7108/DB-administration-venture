<?php
session_start();
error_reporting(0);
if($_SESSION['login'] != 'Admin'){
    header("location:logowanie.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="admin.css">
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
        <h1>Panel administratora DRA</h1>
        <section class="admin-box">
            <section class = "table">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Imie</th>
                        <th>Nazwisko</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Login</th>
                        <th>Haslo</th>
                        <th>Miasto</th>
                        <th>Zdjęcie</th>
                        <th>Opis</th>
                    </tr>
                    <?php
                    error_reporting(0);
                    $con = mysqli_connect("localhost", "root", "", "dra");
                    $query = "Select * from dra_users;";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)){
                        if($row['Miasto'] == null) $row['Miasto'] = "Brak danych";
                        if($row['Zdjęcie'] == null) $row['Zdjęcie'] = "user.png";
                        if($row['Opis'] == null) $row['Opis'] = "Brak opisu";

                        echo("<tr><td>$row[id]</td><td>$row[imie]</td><td>$row[nazwisko]</td><td>$row[telefon]</td><td>$row[email]</td><td>$row[login]</td><td>$row[haslo]</td><td>$row[Miasto]</td><td><img src = 'Profilowe/$row[Zdjęcie]' alt = 'Profilowe użytkownika' height = '20px' width = '20px'></td><td>$row[Opis]</td>");
                    }
                    mysqli_close($con);
                    ?>
                </table>
            </section>
            <section>
                <!-- Usuwanie użytkowników -->
                <section class="delete-box">
                    <form action="" method="post" class="delete">
                        <input type="text" placeholder="Login użytkownika" name="delete"><br>
                        <input type="submit" value="Usuń">
                    </form>
                </section>
                <?php
                    $del = $_POST['delete']; 
                    if(isset($del)){
                        $con = mysqli_connect("localhost", "root", "", "dra");
                        $query = "Delete from `dra_users` where login = '$del';";
                        $result = mysqli_query($con, $query);
                        mysqli_close($con);
                    }
                ?>
                <section class="pdf-box">
                    <form action="pdf/pdf.php" method="post" class="pdf">
                        <input type="submit" value="Plik pdf z użytkownikami">
                    </form>
                </section>
            </section>
            <section class="form-box">
                <!-- Zmiana danych użytkowników -->
                <section class="form">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2>Zmiana danych użytkownika</h2>
                    <p>Dane powinny zostać zmienione w sposób zgodny z procedurami</p>
                    <input type="text" name="imie" placeholder="Imię"><br>
                    <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
                    <input type="email" name="email" placeholder="E-mail"><br>
                    <input type="tel" name="tel" placeholder="Telefon"><br>
                    <input type="text" name="login" placeholder="Login"><br>
                    <input type="password" name="password" placeholder="Hasło">
                    <input type="text" name="miasto" placeholder="Miasto">
                    <input type="text" name="opis" placeholder="Opis">
                    <input type="file" name="file" placeholder="Zdjęcie">
                    <input type="submit" value="Zmień dane">
                </form>
                <?php
                error_reporting(0);
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

                if (!(empty($imie) && empty($nazwisko) && empty($email) && empty($login) && empty($password) && empty($tel))){
                    $con = mysqli_connect("localhost", "root", "", "dra");
                    $query = "Update dra_users SET imie ='$imie', nazwisko='$nazwisko', telefon = '$tel', email = '$email', login = '$login', haslo = '$password', Miasto = '$miasto', Opis = '$opis', Zdjęcie='$lok' where login = '$login';";
                    mysqli_query($con, $query);
                    mysqli_close($con);
                }
                ?>
            </section>
            </section>
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