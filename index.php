<?php
/*
Consegna esercizio

Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre asterischi
*/
// creazione variabile titolo
$title = "PAROLA PROIBITA";

// spiegazione
$explanation = "Questa pagina mostra due testi uguali, tranne che per una parola 'proibita' che viene sostituita tramite PHP con tre *, viene anche indicata la lunghezza dei paragrafi.";

// Creazione variabile con paragrafo di testo
$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda aspernatur debitis repellat maxime, fugiat asperiores possimus unde ut sequi. Enim similique alias libero ea voluptatibus nisi eligendi odio fugit numquam!";

// visualizzo/stampo il paragrafo tramite la parola chiave echo
//echo $text;

//<br> lo suo per dividere le varie parti che stampo usando echo
//echo "<br>";

// visualizzo la lunghezza del paragrafo tramite la funzione strlen e la stampo sempre con echo
//echo strlen($text);
// posso anche salvarla in una variabile che poi usero' per stampare il dato in html 
$originalTextLength = strlen($text);

//echo "<br>";
// dal mio url http://localhost/boolean/php-badwords/index.php?badword=asperiores
// ricavo la parola che voglio sostituire usando la funzione str_replace
// e lo stampo sempre con la parola chiave echo

//echo str_replace($_GET['badword'], "***", $text);
// testo con la parola 'proibita' sostituita
$newText = str_replace($_GET['badword'], "***", $text);

$totLenghtNewText = strlen($newText);

// lascio nella prima parte solo le variabili commentando echo
// cosi' da stampare solo l'html

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <h1><?php echo $title ?></h1>
    <p><?php echo $explanation ?></p>
    <p>Questo e' il paragrafo originale: <?php echo $text ?></p>
    <p>Questa e' il numero di caratteri totale, del paragrafo originale: <?php echo $originalTextLength ?> </p>
    <p>Questo e' il paragrafo senza la parola 'proibita' e il numero totale di caratteri: <?php echo $newText . " " . $totLenghtNewText  ?></p>

</body>
</html>