<?php

 $i = 2;
 while ($i <= 20) {
	echo $i;
	$i+=2;
	echo "\n";
 }

 /*Sintaxe alternativa*/
 $i = 2;
 while ($i <= 20):
	echo $i;
	$i+=2;
	echo "\n";
 endwhile;

//Do-while

 $i = 2;
 do {
	echo $i;
	$i+=2;
	echo "\n";
 }while ($i <= 20);

 //for

 for ($i = 1; $i <= 20; $i++) {
	echo $i;
	echo "\n";
 }

 //foreach
 $carros = Array("Fusca", "Monza", "Passat");

 foreach($carros as $carro){
	echo $carro;
	echo "\n";
 }

 for ($i = 0; $i < count($carros); $i++) {
	echo $carros[$i];
	echo "\n";
 }