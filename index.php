
<?php 
    include __DIR__.'\hotels.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        
    ?>

    <table class="border m-3">
        <tr>
            <th>ID:</th>
            <th>Hotel Name</th>
            <th>Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance To Center</th>
        </tr>
        <?php 
            foreach($hotels as $i => $hotel) {
            ?>
            <tr>
                <td><?php echo $i?></th>
                <td><?php echo $hotel['name'] ?></td>
                <td><?php echo $hotel['description'] ?></td>
                <td><?php echo $hotel['parking'] ?></td>
                <td><?php echo $hotel['vote'] ?></td>
                <td><?php echo $hotel['distance_to_center'] ?></td>
            </tr>
        <?php 
        } 
        ?>
    </table>
</body>
</html>