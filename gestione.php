<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
<?php 

$nomeOggetto = $_POST["nomeOggetto"];
$costo = intval($_POST["costo"]);
$quantita = $_POST["quantita"];

if (isset($_POST["stato"])) {  //PER RISOLVERE QUESTO ERRORE: Warning: Undefined array key "stato" on line 17 
    $stato = $_POST["stato"];
} else {
    $stato = "nuovo";
}
$metodoDiPagamento = $_POST["metodo"];

$totale = 0;


if ($stato == "usato") {
    $totale = $quantita * $costo - $costo*0.2;
} else {
    $totale = $costo;
}

if ($metodoDiPagamento == "Carta") {
    $totale =$totale + 2;

}




echo "

<ul>

<li>$nomeOggetto</li>
<li>Costo singolo: $costo €</li>
<li>Quantità: $quantita</li>";

if ($stato == "usato") {
    echo "<li>OGGETTO USATO</li>";
} else {
    echo "<li>OGETTO NUOVO</li>";
}


echo "

<li>Metodo: $metodoDiPagamento</li>
<br>
<li>Costo Totale: $totale €</li>


    
</ul>



";




?>


</body>
</html>