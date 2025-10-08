<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza danych o pracownikach firm</title>
    <link rel="stylesheet" href="firma.css">
</head>
<body>

<?php

define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "firma");

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

function get_table() {
    global $conn;
    $sql = "SELECT imie, nazwisko, pensja FROM pracownicy WHERE data_urodzenia < '1975-01-01'";
    $result = $conn->query($sql);

    echo "<tr><th>Imię</th><th>Nazwisko</th><th>Pensja</th>";

    foreach ($result as $pracownik) {
        echo sprintf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $pracownik["imie"], $pracownik["nazwisko"], $pracownik["pensja"]);
    }

    return 0;
}

function get_ordered_list() {
    global $conn;
    $sql = "SELECT imie, nazwisko FROM pracownicy WHERE pensja = 2000 AND plec = 'k'";
    $result = $conn->query($sql);

    foreach ($result as $pracownik) {
        echo sprintf("<li>%s %s</li>", $pracownik["imie"], $pracownik["nazwisko"]);
    }

    return 0;
}

function get_income() {
    global $conn;
    $sql = "SELECT pensja FROM pracownicy";
    $result = $conn->query($sql);

    $pensje = [];
    foreach ($result as $pracownik) {
        $pensje[] = $pracownik["pensja"];
    }

    echo sprintf("<p>Najwyższa pensja wynosi: %szł</p>", max($pensje));
    echo sprintf("<p>Najmniejsza pensja wynosi: %szł</p>", min($pensje));
    echo sprintf("<p>Średnia pensja wynosi: %szł</p>", round(array_sum($pensje) / count($pensje), 2));

    return 0;
}

?>

<main>
    <header>
        <h1 style="margin: 0;">Baza danych o pracownikach</h1>
    </header>

    <span style="display: flex; flex-direction: row">
    <div class="left">
        <h2>Informatycy poniżej roku 1975</h2>

        <table>
        <?php get_table()?>   
        </table>
    </div>

    <div class="right">
        <h2>Sekretarki firmy "Omega"</h2>
        <ol>
            <?php get_ordered_list();?>
        </ol>
        <hr>
        <?php get_income();?>
    </div>
    </span>
</main>

<footer>
Autor: Dobrowolski 3tp
</footer>

</body>
</html>