<?php
$temperature=40;
if($temperature <= 20){
    echo "It is really cold today";
    }
    elseif($temperature > 20 && $temperature < 30){
        echo "The weather is just perfect.";
        }
        elseif($temperature > 30 && $temperature < 40){
            echo "It is too hot today.";
        }
        else{
       echo  " Am i in the desert?!";
        }
?>