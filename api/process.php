<?php

include 'Kills.php';
include 'Person.php';

// Defined person A
$personA = new Person($_POST['person_a_age'], $_POST['person_a_death']);
$bithPersonA = $personA->getYear();

// echo $bithPersonA; // dump result

// Defined person B
$personB = new Person($_POST['person_a_age'], $_POST['person_a_death']);
$bithPersonB = $personB->getYear();

// echo $bithPersonB; // dump result

// Birth of year validation
if ($bithPersonA < 1 || $bithPersonB < 1) {
	echo -1; exit;
}

// Defined killed villagers by years
$kills = new Kills;

$killA =  $kills->getVillagers($bithPersonA);
$killB =  $kills->getVillagers($bithPersonB);

// echo $killA; // dump result
// echo $killB; // dump result

// Get average
$avg = ($killA + $killB) / 2;

echo $avg; // dump result

?>