<?php

//Q1  ---------------------------------------------------------
$color = array('white', 'green', 'red', 'blue', 'black'); 
  
echo "The memory of that scene for me 
      is like a frame of film forever frozen at that moment: 
      the ".$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, 
      the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo "<br>";
echo "<br>";

//Q5  ----------------------------------------------------------
$price_per_kg = array('apples'=>110,'bananas'=>45,'oranges'=>60,'mangoes'=>65,'papaya'=>50,'pomegranate'=>140);
echo var_dump($price_per_kg);   echo "<br><br>";


arsort($price_per_kg);


echo var_dump($price_per_kg);   echo "<br><br>";


$costly = array_key_first($price_per_kg);
echo var_dump($costlyf);      echo "<br><br>";


echo "<br><br>";

//Q6   ------------------------------------------- 
$colorset = array('red','green','blue','white','black');

foreach ($colorset as $value){
     echo "<li>".$value."</li>";
    }
    




?>