<?php
    function getRestaurants() {
        $restaurants = array(
            array(
            "name" => "",
            "imgURL" => "",
            "link" => ""
            )
            );
            
        $restFound = array(false, false, false, false);
        
        // Directory + Extension
        $direct = "./img/";
        $ext = ".png";
        
        // Restaurant Names & Pictures
        for($i = 0; $i < 3; ++$i) {
            $img = "";
            $name = "";
            $link = "";
            
            // Ensures unique restaurant displayed
            $randFood = 0;
            while($restFound[$randFood] == true) {
                $randFood = rand(0, 3);
            }
            
            $restFound[$randFood] = true;
            
            switch($randFood) {
                case 0: 
                    $name = "In-n-out";
                    $link = strtolower($name);
                    break;
                    
                case 1:
                    $name = "Chipotle";
                    $link = strtolower($name);
                    break;
                    
                case 2:
                    $name = "Olive Garden";
                    $link = "oliveGarden";
                    break;
                    
                case 3:
                    $name = "Panda Express";
                    $link = "pandaExpress";
                    break;
            }
            
            $img = $direct . $link . $ext;
            
            $restaurants[$i]["name"] = $name;
            $restaurants[$i]["imgURL"] = $img;
            $restaurants[$i]["link"] = $link;
        }
        return $restaurants;
    }
    
    function printFood($food) {
        for($i = 0; $i < count($food); ++$i) {
            echo $food[$i]["name"];
            echo "<a href='./" . $food[$i]["link"] . ".php'>";
            echo "<img id=foodPic src ='" . $food[$i]["imgURL"] . "' />";
            echo "</a>";
        }
    }
    
    function displayFood($restaurant) {
        echo "</br>";
        $dir = "./img/" . $restaurant . "/";
        
        for($i = 1; $i < 4; ++$i) {
            echo "<img id=foodPic src ='" . $dir . $i . ".png' />";
        }
    }
    
    function play() {
        $restaurants = getRestaurants();
        printFood($restaurants);
    }
?>