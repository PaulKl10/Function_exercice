<!-- // - Vous allez réaliser une fonction qui effectue un arrondi à 0.5 supérieur ou inférieur au plus proche suivant la valeur donnée
// - Exemple :
// 0.234 => 0
// 1.56 => 1.5
// 1.27 => 1.5
// 1.12 => 1
// 1.25 => 1.5
// ...
// - Vous réfléchirez au nom de cette fonction, à sa signature, et la manière dont vous l'implémentez -->

<?php
require_once 'layout/header.php';

$number = $_GET['nombre']; // Je récupère la variable de l'URL
Arrondi($number);
function Arrondi($number1)
{
    $number_arrondi_05 = round(($number1/5), 1)*5;
    echo "<p>".$number1." = ".$number_arrondi_05."</p>";
}
require_once 'layout/footer.php';


