<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);
// echo var_dump($menu);
// echo $menu["menu"][0]["nama"];
$menu = $menu["menu"];
// echo $menu[0]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPU HUT</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container">
     <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="gambar" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home</a>   
            </div>
        </div>
     </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
            <h1>All menu</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($menu as $row) : ?>
            <div class="col-md-4">
                <div class="card">
                <img src="img/pizza/<?= $row['gambar']; ?>" class="card-img-top" alt="gambar">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['nama']; ?></h5>
                    <p class="card-text"><?= $row['deskripsi']; ?></p>
                    <h5 class="card-title"><?= $row['harga']; ?></h5>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <script src="../dataJSON/jquery.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>