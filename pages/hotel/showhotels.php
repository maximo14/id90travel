<?php
require '../../services/hotel_service.php';

$hotels = array();
if (
    !empty($_POST['destination']) &&
    !empty($_POST['checkin']) &&
    !empty($_POST['checkout']) &&
    !empty($_POST['guest'])
) {
    $hotel_service = new HotelService();
    $hotels = $hotel_service->getHotels($_POST['destination'], $_POST['checkin'], $_POST['checkout'], $_POST['guest']);
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/main.js"></script>
</head>

<body>
    <div class="center-container-item title">
        <h1>Hotels</h1>
    </div>

    <div class="flex-container">
        <?php
        foreach ($hotels as $hotel) {
            # code...        
            //echo '<div>';
            echo '<div class="card mg-botton" style="width: 18rem;">';
            echo    '<img src="' . $hotel->getImage() . '" class="card-img-top" alt="...">';
            echo        '<div class="card-body">';
            echo            '<h5 class="card-title">' . $hotel->getName() . '</h5>';
            echo            '<p class="card-text">' . $hotel->getDescription() . '</p>';
            echo            '<p class="card-text">' . "Total: $".$hotel->getTotal()." (USD)" . '</p>';
            echo            '<p class="card-text">' ."location: ". $hotel->getLocation()->getCity() .", ".$hotel->getLocation()->getCountry() . '</p>';
            echo            '<p class="card-text">' ."location Description: ".$hotel->getLocation()->getDescription(). '</p>';
            echo        '</div>';
            echo  '</div>';
            //echo '</div>';
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>