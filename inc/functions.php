<?php
    function getRestaurants() {
        $restaurants = array(
            array(
            "name" => "",
            "imgURL" => "",
            "link" => ""
            )
            );
            
        $restFound = array(false, false, false);
        
        // Directory + Extension
        $direct = "./img/";
        $ext = ".png";
        
        // Restaurant Names & Pictures
        for($i = 0; $i < 3; ++$i) {
            $img = "";
            $name = "";
            $link = "";
            
            // Ensures unique restaurant displayed
            $randFood = rand(0, 2);
            if($restFound[$randFood] == true) {
                while($restFound[$randFood] == true) {
                    $randFood = rand(0, 2);
                }
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
            }
            
            $img = $direct . $link . $ext;
            
            $restaurants[$i]["name"] = $name;
            $restaurants[$i]["imgURL"] = $img;
            $restaurants[$i]["link"] = $link;
        }
        return $restaurants;
    }
    
    function printRestaurant($restaurants) {
        for($i = 0; $i < count($restaurants); ++$i) {
            echo "<div id=name" . $i . ">";
            echo "<h3>" . $restaurants[$i]["name"] . "</br>" . "</h3>";
            echo "<a href='./" . $restaurants[$i]["link"] . ".php'>";
            echo "<img id=restPic src ='" . $restaurants[$i]["imgURL"] . "' />";
            echo "</a>";
            echo "</div>";
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
        printRestaurant($restaurants);
    }
?>