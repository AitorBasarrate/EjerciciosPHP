<!-- <?php
	error_reporting(E_ALL);
	echo $x;//Notice: Undefined variable: x in C:\xampp\htdocs\index.php on line 3
	$y=$x+2;
	echo $y;//Notice: Undefined variable: x in C:\xampp\htdocs\index.php on line 4
?> -->

<!-- <?php
$v1=18;
$v2="abenduaren 3a";
$v3=$v1+$v2;
echo $v3;//"18 aterako da.
$v4=$v1 . $v2;
echo "<br> $v4";//"18abenduaren 3a" 
?> -->

<!-- <?php
	$octal=071;
	echo $octal,"<br />";//57 aterako da.
	$hexa=0xA2BC;
	echo $hexa;//41660 aterako da.
?> -->

<!-- <?php 
	$var1= 1!=2; //integer
	echo $var1;//1 aterako da.
?> -->

<!-- <?php
	$zbk = 125;
	echo ($zbk*30)/100;
?>-->

<!-- <?php
	$produktua = 43.9;
	$BEZ = 21;
	echo ($produktua*$BEZ)/100;
?> -->

<!-- <?php
	$litro_pintura_koadro = 0.1;
	$horma_altuera = 10;
	$horma_zabalera = 4;
	$lata_prezioa = 42;
	$guztira;

	$guztira = (($horma_zabalera*$horma_altuera)*$litro_pintura_koadro)*$lata_prezioa;

	echo $guztira;
?> -->

<!-- <?php
	$oinarri = 2;
	$altuera = 8;

	echo ($oinarri*$altuera)/2;
?> -->

<!-- <?php
	echo ((62 + (8-2)) / 7 + 35 % 7 - 8 * 5 / 4 * 2) , "<br>";
	echo (4 > 5 || ! (45 == 7) && 7 + 3 < 5 - 2) , "<br>";
	echo 27%4 +15/5 , "<br>";
	echo 25 >= 7 && (7 <= 2) , "<br>";
	echo (36 / 4** 2) -2 , "<br>";
	echo 24 > 5 && 10 <= 10 || 10 == 5 , "<br>";
	echo (10 >= 15 || 23 == 13) && ! (8 == 8) , "<br>";
	echo (7 * 3 - 4 * 4)**2 / 4 * 2 , "<br>";
	echo (!(6 / 3 > 3) || 7 > 7) && (3 <= 9 / 3 || 2 + 3 <= 7 / 2) , "<br>";
	echo 1 / 2 / 4 , "<br>";
	echo 1 / 2.0 / 4.0 , "<br>";
	echo 3e3 / 10 , "<br>";
	echo 10 / 5e-3 , "<br>";
	echo 10 / 5e-3 + 1 , "<br>";
	echo 3 / 2 + 1 , "<br>";
?> -->

<?php
	$zortzitar = 057;
	$hirurogeitasei = 66;
	printf ($zortzitar);
	printf(chr($hirurogeitasei));
?>