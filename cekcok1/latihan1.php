<?php 

// $santri = [
//     [
//         "nama" => "mustofa",
//         "nim" => "3213213",
//         "email" => "mustofaharahap40@gmail.com"
//     ],

//     [
//         "nama" => "mustofa",
//         "nim" => "3213213",
//         "email" => "mustofaharahap40@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=data', 'root', '12345');
$db = $dbh->prepare('SELECT * FROM santri');
$db->execute();
$data = $db->fetchAll(PDO::FETCH_ASSOC);



$data = json_encode($data);
echo $data;

?>