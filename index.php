<?php 
include __DIR__ . ("/model/hotels.php");
?>

<?php
          $filteredHotels = $hotels;

                if (isset($_GET['vote']) && $_GET['vote'] !== '') {
                    $minVote = (int)$_GET['vote'];
                    $filteredHotels = array_filter($filteredHotels, function ($hotel) use ($minVote) {
                        return $hotel['vote'] >= $minVote;
                    });
                }


                
                   if (isset($_GET['parking']) && $_GET['parking'] !== '') {
                    $hasParking = (bool)$_GET['parking'];
                    $filteredHotels = array_filter($filteredHotels, function ($hotel) use ($hasParking) {
                        return $hotel['parking'] === $hasParking;
                    });
                }
 ?>

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

                foreach ($filteredHotels as $hotel) {
                    echo "<tr>
                            <td>{$hotel['name']}</td>
                            <td>{$hotel['description']}</td>
                            <td>{$hotel['vote']}</td>
                            <td>{$hotel['distance_to_center']}</td>
                        </tr>";
                }
          ?>

    </tbody>
</main>
</html>