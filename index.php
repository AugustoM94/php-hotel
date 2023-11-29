<?php 
include __DIR__ . ("/model/hotels.php");
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