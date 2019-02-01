<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
    </script>
</head>
<body>
    <div>
        <header>
            <h3>Shop Here</h3>
        </header>
    </div>
    <div>
        <?php
            echo "<h4>You have " . sizeof($_SESSION['cart']) . " items in your cart.</h4>";
        ?>
    </div>
    <div>
        <div>
            <form name="form1" action="add.php" method="post">
                <div>
                    <h2>Squirtle</h2>
                    <h3>$7000</h3>
                    <input type="hidden" value="7000" name="price">
                    <input type="hidden" value="Squirtle" name="product">
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
        <div>
            <form name="form2" action="add.php" method="post">
                <div>
                    <h2>Pikachu</h2>
                    <h3>$5000</h3>
                    <input type="hidden" value="5000" name="price">
                    <input type="hidden" value="Pikachu" name="product">
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
        <div>
            <form name="form3" action="add.php" method="post">
                <div>
                    <h2>Charmander</h2>
                    <h3>$10000</h3>
                    <input type="hidden" value="10000" name="price">
                    <input type="hidden" value="Charmander" name="product">
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
    <a href="cart.php">cart</a>
    
    
</body>
</html>