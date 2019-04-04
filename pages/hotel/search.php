<?php
session_start();
$member = $_SESSION["member"];
if(!$member){
    header("location : ../login/login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEARCH HOTELS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/main.js"></script>
</head>

<body>
<form class="center-container-item" action="showhotels.php" method="post">
        <div class="my-content my-form-content bg-secondary"> 
        <div class="center-container-item">
                <h1>SEARCH HOTELS</h1>
            </div>          
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" autocomplete="off" required class="form-control" name="destination" id="destination" placeholder="Enter travel destination">
            </div>  
            <div class="form-group">
                <label for="checkin">Checkin Date</label>
                <input type="date" autocomplete="off" required class="form-control" name="checkin" id="checkin">
            </div>             
            <div class="form-group">
                <label for="checkout">Checkout Date</label>
                <input type="date" autocomplete="off" required class="form-control" name="checkout" id="checkout" >
            </div>  
            <div class="form-group">
                <label for="guest">Guests number</label>
                <input type="number" autocomplete="off" required class="form-control" name="guest" id="guest" >
            </div>  
            <div class="center-container-item">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>          
        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>