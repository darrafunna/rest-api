<?php


// $mahasiswa = [
//     [
//         "nama" => "Darra Funna",
//         "nim" => 105219004,
//         "email" => "darra.funna@universitaspertamina.ac.id"
//     ],
//     [
//         "nama" => "Rafly Ramadhan",
//         "nim" => 105219029,
//         "email" => "rafly.ramadhan@universitaspertamina.ac.id"
//     ]
// ];

// $dbh = new PDO('mysql:host=localhost;dbname=rest_api', 'root', ' ');
// $db = $dbh->prepare('SELECT * FROM mahasiswa');
// $db->execute();

// $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

// $data = json_encode($mahasiswa);

// echo $data;

$conn = mysqli_connect('localhost', 'root', '', 'rest_api');
mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
while($row = mysqli_fetch_assoc($query)) {
 $data[] = $row;
}
   
$json = json_encode($data);
echo $json;


?>