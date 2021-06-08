<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Covid-19 di Indonesia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <strong>Update!</strong> Virus Corona di Indonesia
                </div>
            </div>
        

            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Positif</h4>
                        <p class="card-text text-center"><?= $data[0]['positif']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-warning p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-grin-alt"></i>Dirawat</h4>
                        <p class="card-text text-center"><?= $data[0]['dirawat']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-succes p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Sembuh</h4>
                        <p class="card-text text-center"><?= $data[0]['sembuh']; ?> </p>
                    </div>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="card badge-danger p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Meninggal</h4>
                        <p class="card-text text-center"><?= $data[0]['meninggal']; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>