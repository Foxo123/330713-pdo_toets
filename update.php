<?php

include("./Pdo_handler.php");

$db_manager = new Pdo_handler();

$info = $db_manager->getInfoById($_GET["id"]);



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
        <h1>Maak je eigen pizza</h1>
        <div class="row">
            <div class="col">
                <form action="./update-script.php" method="post">
                    <label for="bodem">bodem formaat</label>
                    <select name="bodem" id="bodem">
                        <option <?php if($info["bodem"] == "20") echo "selected" ?> value="20">20</option>
                        <option <?php if($info["bodem"] == "25") echo "selected" ?> value="25">25</option>
                        <option <?php if($info["bodem"] == "30") echo "selected" ?> value="30">30</option>
                        <option <?php if($info["bodem"] == "35") echo "selected" ?>value="35">35</option>
                        <option <?php if($info["bodem"] == "40") echo "selected" ?>value="40">40</option>
                    </select>
                    <label for="saus">Saus</label>
                    <select name="saus" id="saus">
                        <option <?php if($info["saus"] == "Tomatensaus") echo "selected" ?>value="Tomatensaus">Tomatensaus</option>
                        <option <?php if($info["saus"] == "Extra tomatensaus") echo "selected" ?>value="Extra tomatensaus">Extra tomatensaus</option>
                        <option <?php if($info["saus"] == "Spicy tomatensaus") echo "selected" ?>value="Spicy tomatensaus">Spicy tomatensaus</option>
                        <option <?php if($info["saus"] == "BBQ saus") echo "selected" ?>value="BBQ saus">BBQ saus</option>
                        <option <?php if($info["saus"] == "Creme fraiche") echo "selected" ?>value="Creme fraiche">Crème fraiche</option>
                    </select>
                    <p>Pizzatoppings</p>
                    <div>
                        <input type="radio" id="vegan" name="pizzatoppings" value="vegan" <?php if($info["toppings"] == "vegan") echo "checked" ?>>
                        <label for="vegan">vegan</label>
                    </div>
                    <div>
                        <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch" <?php if($info["toppings"] == "vegetarisch") echo "checked" ?>>
                        <label for="vegetarisch">vegetarisch</label>
                    </div>
                    <div>
                        <input type="radio" id="vlees" name="pizzatoppings" value="vlees" <?php if($info["toppings"] == "vlees") echo "checked" ?>>
                        <label for="vlees">vlees</label>
                    </div>
                    <p>Kruiden</p>
                    <div>
                        <input type="checkbox" id="Peterselie" name="peterselie" <?php if(strpos($info["kruiden"], "peterselie") !== false) echo "checked" ?>>
                        <label for="scales">peterselie</label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="oregano" <?php if(strpos($info["kruiden"], "oregano") !== false) echo "checked" ?>>
                        <label for="horns">oregano</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="chili"<?php if(strpos($info["kruiden"], "chili") !== false) echo "checked" ?>>
                        <label for="horns">chili flakes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="peper"<?php if(strpos($info["kruiden"], "peper") !== false) echo "checked" ?>>
                        <label for="horns">zwarte peper</label>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
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