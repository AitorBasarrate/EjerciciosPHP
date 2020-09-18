<!-- <?php
	$izenak = array ("ruper", "juan", "marta", "maria", "martin", "jorge", "miriam", "nahuel", "mirta");
	$izenak2 = array ();
	$n = 0;
	for($i = 0; $i < count($izenak); $i++){
		if(preg_match("/m+/", $izenak[$i]) == 1){
			$izenak2[$n] = $izenak[$i];
			$n++;
		}
	}

	for($i = 0; $i < count($izenak2); $i++){
		print $izenak2[$i];
		print " ";
	}
?> -->

<!-- <?php
	$zenbakiak= array (10, 2, 3, 14, 15, 1, 7, 9, 8, 11);
	$handiena = 0;
	for($i = 0; $i < count($zenbakiak); $i++){
		if($zenbakiak[$i] > $zenbakiak[$i+1]){
			if($handiena < $zenbakiak[$i]){
				$handiena = $zenbakiak[$i];
			}
		}else if($zenbakiak[$i] < $zenbakiak[$i+1]){
			if($handiena < $zenbakiak[$i+1]){
				$handiena = $zenbakiak[$i+1];
			}
		}
	}
	print $handiena;
?> -->

<!-- <?php
	$zenbakiak= array (10, 2, 3, 14, 15, 1, 7, 9, 8, 11);
	$txikiena = 1;
	for($i = 0; $i < count($zenbakiak); $i++){
		if($zenbakiak[$i] < $zenbakiak[$i+1]){
			if($txikiena > $zenbakiak[$i]){
				if($zenbakiak > 0){
					$txikiena = $zenbakiak[$i];
				}
				
			}
		}else if($zenbakiak[$i] < $zenbakiak[$i+1]){
			if($txikiena > $zenbakiak[$i+1]){
				if($zenbakiak > 0){
					$txikiena = $zenbakiak[$i];
				}
			}
		}
	}
	print $txikiena;
?> -->

<!-- <?php
	$arr = array();
	$zbk = 0;
	$i = 0;
	while (count($arr) < 10){
		if($zbk % 2 == 0){
			$arr[$i] = $zbk;
			print $zbk;
			print " ";
		}
		$i++;
		$zbk++;
	}
?> -->

<!-- <?php
	$arr = array(
		1 => 90,
		30 => 7,
		'e' => 99,
		'kaixo' => 43,

	);

	foreach($arr as $c => $i){
		print $c;
		print " => ";
		print $i;
		print "   ";
	}
?> -->

<!-- <?php
	$arr = array('Madril', 'Bartzelona', 'Bilbo', 'Valentzia', 'Gasteiz');
	$n = 0;
	foreach($arr as $i){
		print $n;
		print " indizea duen hiria: ";
		print $i;
		print " | ";
		$n++;
	}
?> -->

<!-- <?php
	$arr = array(
		1 => 'Madril',
		30 => 'Bartzelona',
		'e' => 'Bilbo',
		'kaixo' => 'Vlentzia',
		'kk' => 'Gasteiz'
	);

	foreach($arr as $c => $i){
		print $c;
		print " indizea duen hiria: ";
		print $i;
		print " | ";
	}
?> -->

<!-- <?php
$arr = array(
		'Izena' => 'Pedro Torres',
		'Helbidea' => 'Lehendakari Agirre Kalea, 37',
		'Telefonoa' => '999999999'
	);

	foreach($arr as $c => $i){
		print $c;
		print ": ";
		print $i;
		print " | ";
	}
?> -->

<?php
$arr = array('Pedro', 'Ismael', 'Sonia', 'Nerea', 'Susana', 'Alfonso', 'Teresa');

	foreach($arr as $i){
		$luzera = strlen($i);
		print $luzera;
		print "  |  ";
	}
?>

<?php

$array1 = array(2=>"Lagartija","Araña","Perro","Gato","Ratón","sa"=>"Sauce");
$array2 = array(12,14,45,52,12);
$array3 = array("sa"=>"Sauce llorón","Pino","Naranjo","Chopo","Perro",34);
$array4 = array();

	foreach($arr as $i){
		$luzera = strlen($i);
		print $luzera;
		print "  |  ";
	}
?>

