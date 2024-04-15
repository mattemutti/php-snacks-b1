<?php

/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/


$matches = [
	[
		'Milano',
		'Cantù',
		'55',
		'60',
	],
	[
		'Brescia',
		'Genova',
		'100',
		'20',
	],
	[
		'Livorno',
		'Napoli',
		'75',
		'33',
	],
	[
		'Bologna',
		'Bergamo',
		'55',
		'0',
	],
	[
		'Campobasso',
		'Ancona',
		'80',
		'68',
	],
];


//var_dump($matches);

foreach ($matches as $match) {
	//var_dump ($match);
	echo ("$match[0]-$match[1]  |  $match[2] - $match[3]  <br>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Snack1</title>
</head>
<body>
	
</body>
</html>