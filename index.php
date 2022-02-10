<?php

if (!empty($_GET)) {
    switch ($_GET["err"]) {
        case "conn-failed":
            $message = '<div class="alert alert-danger" style="text-align: center;" role="alert">
                        connection failed
                        </div>';
            break;

        case "create-failed":
            $message = '<div class="alert alert-danger" style="text-align: center;" role="alert">
                        failed creating record
                        </div>';
            break;
        case "update-failed":
            $message = '<div class="alert alert-danger" style="text-align: center;" role="alert">
                        could not update this record
                        </div>';
            break;
        case "update-success":
            $message = '<div class="alert alert-success" style="text-align: center;" role="alert">
                        succesfully updated
                        </div>';
            break;
        case "deleting-success":
            $message = '<div class="alert alert-success" style="text-align: center;" role="alert">
                        succesfully deleted
                        </div>';
            break;
        case "deleting-failed":
            $message = '<div class="alert alert-danger" style="text-align: center;" role="alert">
                        deleting failed
                        </div>';
            break;
        default:
            break;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>pdo</title>
</head>

<body>



    <div class="container" style="padding-top: 25px;">
        <?php echo (isset($message)) ? $message : "";
        ?>
        <h1>Maak je eigen pizza</h1>
        <div class="row">
            <div class="col">
                <form action="./create.php" method="post">
                    <label for="bodem">bodem formaat</label>
                    <select name="bodem" id="bodem">
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                    </select>
                    <label for="saus">Saus</label>
                    <select name="saus" id="saus">
                        <option value="Tomatensaus">Tomatensaus</option>
                        <option value="Extra tomatensaus">Extra tomatensaus</option>
                        <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                        <option value="BBQ saus">BBQ saus</option>
                        <option value="Creme fraiche">Crème fraiche</option>
                    </select>
                    <p>Pizzatoppings</p>
                    <div>
                        <input type="radio" id="vegan" name="pizzatoppings" value="vegan" checked>
                        <label for="vegan">vegan</label>
                    </div>
                    <div>
                        <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
                        <label for="vegetarisch">vegetarisch</label>
                    </div>
                    <div>
                        <input type="radio" id="vlees" name="pizzatoppings" value="vlees">
                        <label for="vlees">vlees</label>
                    </div>
                    <p>Kruiden</p>
                    <div>
                        <input type="checkbox" id="Peterselie" name="peterselie" checked>
                        <label for="scales">peterselie</label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="oregano">
                        <label for="horns">oregano</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="chili">
                        <label for="horns">chili flakes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="peper">
                        <label for="horns">zwarte peper</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a href="./read.php"><button type="button" class="btn btn-primary">Go to read.php</button></a>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>