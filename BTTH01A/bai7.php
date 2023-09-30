
<?php
    echo '<p style = "color: red">Bai 7</p>';
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    $evens = array_filter($array, function($n){
        return $n%5===0 && $n>=100 && $n<=200;
    });
    
    foreach($evens as $evens){
        echo $evens . '<br>';
    }
    
?>