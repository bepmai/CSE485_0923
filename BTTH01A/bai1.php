<?php
    function SSMD($arr) {
        $sum = array_sum($arr);
        $subtract = $arr[0];
        $multiply = $arr[0];
        $divide = $arr[0];
    
        for ($i = 1; $i < count($arr); $i++) {
            $subtract -= $arr[$i];
            $multiply *= $arr[$i];
            $divide /= $arr[$i];
        }
    
        return array(
            'sum' => $sum,
            'subtract' => $subtract,
            'multiply' => $multiply,
            'divide' => $divide
        );
    }
    
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $result = SSMD($arrs);
    
    // In kết quả
    echo '<p style = "color: red">Bai 1</p>';
    echo "Tổng: " . $result['sum'] . "<br>";
    echo "Hiệu: " . $result['subtract'] . "<br>";
    echo "Tích: " . $result['multiply'] . "<br>";
    echo "Thương: " . $result['divide'] . "<br>";

?>