<?php 
include __DIR__ . ("/model/hotels.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title> PHP Hotel </title>
</head>
<body>
        <?php
           include __DIR__ . ("/partials/header.php");
         ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Vote</th>
            <th>Distance to center</th>
        </tr>
    </thead>
    <tbody>
        

<?php

foreach ($hotels as $hotel) {
    echo "<tr>
            <td>{$hotel["name"]}</td>
            <td>{$hotel["description"]}</td>
            <td>{$hotel["vote"]}</td>
            <td>{$hotel["distance_to_center"]}</td>
        </tr>";
}

?>
    </tbody>
</main>
</html>