<?php
//!descrizione:

//*1) Creare una variabile con un paragrafo di testo a vostra scelta.
$text='Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dicta quam corrupti sequi omnis explicabo culpa repudiandae debitis veniam molestias reiciendis earum quidem cupiditate nobis voluptatibus numquam, officia natus vitae';

//*2) Stampare a schermo il paragrafo e la sua lunghezza.
$len=strlen($text);

//*3) Una parola da censurare viene passata dall'utente tramite parametro GET.
$word= $_GET['word'];

//*4) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
//*   con tre asterischi  (***) tutte le occorrenze della parola da censurare.

$new_text= str_replace($word,'***',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>BadWords</title>
</head>
<body class="container mt-4">
<p><?php echo $text ?></p>
<hr>
<p class="mt-1">la lunghezza del paragrafo è di: <?php echo $len ?> caratteri. </p>
<h3 class="mt-4">Testo trasformato</h3>
<p><?php echo $new_text ?></p>
<hr>
<p class="mt-1">la lunghezza del paragrafo è di: <?php echo strlen($new_text) ?> caratteri. </p>


</body>
</html>