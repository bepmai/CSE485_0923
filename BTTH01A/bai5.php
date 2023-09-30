<?php
    echo '<p style = "color: red">Bai 5</p>';
    $a = array(
        'a' => array(
              'b' => 0,
              'c' => 1
        ),
        'b' => array(
               'e' => 2,
               'o' => array(
               'b' => 3
               )
        )
    );
    echo "Lấy giá trị = 3 mà có key là b từ mảng trên: ";
    $key1 = $a['b'];
    $key2 = $key1['o'];
    echo $key2['b']."<br>";

    echo "Lấy giá trị = 1 mà có key là c từ mảng trên: ";
    $key3 = $a['a'];
    echo $key3['c']."<br>";

    echo "Lấy thông tin của phần tử có key là a:" . '<br>';
    print_r($a['a']);
?>
