<?php

require "parking_db.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="main.js"></script>
    </head>
    <body>
        <div>
            <header>
                
            </header>        
        </div>
        <div>
            <ul class="list-inline">
                <li><a href="lot_view.php"></a></li>
                <li><a href=""></a></li>
            </ul>
        </div> 
        <div>
            <form action="">
                <label for="building">Building</label>
                <select name="" id="building">
                    <option value="">STC</option>
                    <option value="">Austin</option>
                    <option value="">Taylor</option>
                    <option value="">Kymball</option>
                    <option value="">Snow</option>
                </select>
                <label for="lot">Parking Lot</label>
                <select name="" id="lot">
                    <option value="">Taylor N parking</option>
                    <option value="">Benson A parking</option>
                    <option value="">Kymball N parking</option>
                    <option value="">Kymball A parking</option>
                    <option value="">STC S parking</option>
                </select>
                <label for="start">Arrival Time</label>
                <input type="text" name="" id="start">
                <label for="end">Departure Time</label>
                <input type="text" name="" id="end">'
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>