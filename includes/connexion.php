<?php

$bd = 'lif4projet';
$user = 'Nyati';
$pwd = 'unicorn';
$machine = 'localhost';


$connect=mysqli_connect($machine,$user,$pwd,$bd);

if(mysqli_connect_errno())
	printf ("Echec de connexion : \%s", mysqli_connect_error());
?>