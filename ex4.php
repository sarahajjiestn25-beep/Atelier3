<?php
$prix = 20; // Modifiez cette valeur
if ($prix < 50) {
echo "Pas de réduction.";
} elseif ($prix <= 100) {
echo "Réduction de 10% : " . ($prix * 0.9) . "€";
} else {
echo "Réduction de 20% : " . ($prix * 0.8) . "€";
}
?>
