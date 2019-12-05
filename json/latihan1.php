<?php 


// $mahasiswa = [
//     [
//         "nama" => "Gugi Imamudin",
//         "nrp" => "153040064",
//         "email" => "gugiimamudin@gmail.com"
//     ],
//     [
//     "nama"=> "Rayi Oktora"
//     "nrp"=> "153040066",
//     "email"=> "rayi@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>