<?php 

$data = file_get_contents('coba2.json');
$mahasiswa = json_decode($data, true);

echo var_dump($mahasiswa);
echo $mahasiswa[0]['pembimbing']['pembmbing1'];
?>