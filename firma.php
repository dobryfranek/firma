<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza danych o pracownikach firm</title>
    <link rel="stylesheet" href="firma.css">
</head>
<body>
    
<main>

<header>
    <h1>Baza danych o pracownikach</h1>
</header>


<div class="left">
    <h2>Informatycy poniżej roku 1975</h2>

    <table>
    <?php get_table()?>   
    </table>
</div>

<div class="right">
    <h2>Sekretarki firmy "Omega"</h2>
    <ol>
        <?php get_ordered_list()?>
    </ol>
    <hr>
    <?php get_income()?>
</div>

</main>

<footer>
Autor: Dobrowolski 3tp
</footer>

</body>
</html>