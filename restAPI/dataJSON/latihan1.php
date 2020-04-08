<?php 

function json_go($json){
        return json_encode($json);
}
// $mahasiswa = [
//         "nama" => "marrochi",
//         "nim" => 171011400286,
//         "aktif" => true
// ];

// $json_encode = json_encode($mahasiswa);
// echo $json_encode;


// $multiMahasiswa = [
//     [
//         "nama" => "marrochi",
//         "nim" => 171011400286,
//         "aktif" => true
//     ],[
//         "nama" => "kamila",
//         "nim" => 171011400226,
//         "aktif" => false
//     ]

// ];

// echo json_go($multiMahasiswa);


$dbh = new PDO('mysql:host=localhost;dbname=db_json','root','');
$db = $dbh->prepare("select * from mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

echo json_go($mahasiswa);
?>