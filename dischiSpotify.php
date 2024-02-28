<?php
// Prassi per poter ottenenere il file json 

// Per recuperare i dati nel file json per poi trasformarla in stringa
$string = file_get_contents("dischi.json");

// Trasformare la stringa in array
$list = json_decode($string, true);

// Permette al browser di interpretare il tutto come file json
header('Content-Type: application/json');

// Stampa
echo json_encode($list);
