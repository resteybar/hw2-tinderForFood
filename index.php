<?php
include 'inc/functions.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fooder</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    
    <body>
        <h1>Fooder</h1>
        
        <div id="main">
            <?php
                $food = array(
                    array(
                    "imgURL" => "",
                    "name" => ""
                    )
                    );
                    
                $imgDirect = "./img/";
                $ext = ".png";
                
                // Restaurant Names
                $food[0]["name"] = "In-n-out";
                $food[1]["name"] = "Chipotle";
                $food[2]["name"] = "Olive Garden";
                $food[3]["name"] = "Panda Express";
                $food[4]["name"] = "Taco Bell";
                
                // Food Picture URLs
                $food[0]["imgURL"] = $imgDirect . "In-n-out" . $ext;
                $food[1]["imgURL"] = $imgDirect . "Chipotle" . $ext;
                $food[2]["imgURL"] = $imgDirect . "OliveGarden" . $ext;
                $food[3]["imgURL"] = $imgDirect . "PandaExpress" . $ext;
                $food[4]["imgURL"] = $imgDirect . "TacoBell" . $ext;
                
                $getFood = rand(0, count($food) - 1);
                
                echo "<img id=foodPic src ='" . $food[$getFood]["imgURL"] . "' /> <br/>" ;
            ?>
        </div>
    </body>
    
    <footer>
        <form>
            <input type = "submit" value = "Reroll"/>
        </form>
        <form>
            <input type = "submit" value = "Try Now!"/>
        </form>
    </footer>
</html>