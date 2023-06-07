<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous" defer></script>
    <title>PHP Hotel</title>
</head>
<body>
    
   <?php 
    // Prendo il primo elemento dell'array e lo metto in una variabile
    $firstHotel = $hotels[0]; 
    // Mi faccio restituire le chiavi dell'array(primo elem)
    $keys = array_keys($firstHotel); ?>


    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <!-- Ciclo sull'array $key creato in precedenza per stampare le chiavi  -->
            <?php foreach ($keys as $key ) {
                ?><th scope="col"><?= $key ?></th><?php
            } ?>
        </tr>
    </thead>
    <tbody>
        <!-- ciclo sugli hotel per stampare tutte le informazini di ciascuno -->
        <?php foreach ($hotels as $key => $hotel) {?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td>
                        <?= $hotel['parking'] 
                        ? '<i class="fa-solid fa-check" style="color: #00f56a;"></i>' 
                        : '<i class="fa-solid fa-xmark" style="color: #ff0000;"></i>'?>
                    </td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
            </tr><?php
        }?>
  </tbody>
</table>
</body>
</html>