
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Hotel</title>
  </head>
  <body>
    <ul>
      <?php for ($i = 0; $i < count($hotels); $i++ ){?>
      <li>
        <h2> <?php echo $hotels[$i]["name"] ?></h2>
        <h4><?php echo $hotels[$i]["description"] ?></h4>
        <h4>With Parking: <?php echo $hotels[$i]["parking"] ?></h4>
        <h2>Vote:<?php echo $hotels[$i]["vote"] ?></h2>
        <h4>Distance to center: <?php echo $hotels[$i]["distance_to_center"] ?> km</h4>
      </li>
      <?php } ?>

    </ul>
  </body>
</html>
