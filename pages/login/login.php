<?php
require '../../services/airline_service.php';
require '../../services/authentication_service.php';

$serv_airline = new ArilineService();
$airlines = $serv_airline->getAllAirlines();

if (!empty($_POST['airline']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $serv_auth = new AuthenticationService();
    $member = $serv_auth->authenticate($_POST['airline'], $_POST['username'], $_POST['password']);
    session_start();
    $_SESSION["member"] = $member;
    header("location: ../hotel/search.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/main.js"></script>
</head>

<body>
    <form class="center-container-item" action="login.php" method="post">
        <div class="my-content my-form-content bg-secondary">
            <div class="center-container-item">
                <h1>LOGIN</h1>
            </div>
            <div class="form-group">
                <label for="airline">Airline</label>
                <input list="brow" type="text" autocomplete="off" required class="form-control" name="airline" id="airline" placeholder="Enter airline">
                <datalist id="brow">
                    <?php
                    foreach ($airlines as $value) {
                        echo  "<option value=" . '"' . $value->getDisplayName() . '"' . ">";
                    }
                    ?>
                </datalist>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" autocomplete="off" required class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input type="password" class="form-control" required name="password" id="password" placeholder="Enter password">
            </div>
            <div class="center-container-item">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>