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

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD);



function get_table() {
    $sql = "SELECT imie, nazwisko, pensja FROM pracownicy WHERE data_urodzenia < '1975-01-01'";
    return "";
}

function get_ordered_list() {
    return "";
}

function get_income() {
    return "";
}

?>

<main>
    <header>
        <h1>Baza danych o pracownikach</h1>
    </header>

    <span style="display: flex; flex-direction: row">
    <div class="left">
        <h2>Informatycy poniżej roku 1975</h2>

        <table>
        <?php echo get_table()?>   
        </table>
    </div>

    <div class="right">
        <h2>Sekretarki firmy "Omega"</h2>
        <ol>
            <?php echo get_ordered_list();?>
        </ol>
        <hr>
        <?php echo get_income();?>
    </div>
    </span>
</main>

<footer>
Autor: Dobrowolski 3tp
</footer>

</body>
</html>