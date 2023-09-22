<!-- bai 1 -->
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

<!-- Bai 2 -->
<?php
    echo '<p style = "color: red">Bai 2</p>';
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $peop = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
    $result = '';
    foreach ($arrs as $key => $color) {
        $result .= "Màu $color là màu yêu thích của " . $peop[$key];
        if ($key < count($arrs) - 1) {
            $result .= ', ';
        } else {
            $result .= '.';
        }
    }
    
    echo $result.'<br>';
?>

<?php
    echo '<p style = "color: red">Bai 3</p>';
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
    echo '<table border="1">
        <thead>
            <tr>
                <th>Ten khoa hoc</th>
            </tr>
        </thead>
        <tbody>';
            foreach ($arrs as $key => $language) {
                echo '<tr>';
                echo '<td>' . $language . '</td>';  // Ngôn ngữ lập trình
                echo '</tr>';
            }
     echo   '</tbody>
    </table>';
?>

<?php
    echo '<p style = "color: red">Bai 4</p>';
    $arrs = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid",
        "Sweden" => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia" => "Tallin",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malta" => "Valetta",
        "Austria" => "Vienna",
        "Poland" => "Warsaw"
    );
    
    foreach ($arrs as $country => $capital) {
        echo "Thủ đô của $country là $capital<br>";
    }
?>

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

<?php
    echo '<p style = "color: red">Bai 6</p>';
    $keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
    );
    $values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
    );
    $keysAndValues = array_combine($keys, $values);

    foreach ($keysAndValues as $key => $value) {
        echo "\"$key\" => \"$value\"<br>";
    }

?>

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

<?php
    echo '<p style = "color: red">Bai 8</p>';
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLengthString = $array[0];
    $minLengthString = $array[0];

    foreach ($array as $string) {
        $length = strlen($string);

        if ($length > strlen($maxLengthString)) {
            $maxLengthString = $string;
        }

        if ($length < strlen($minLengthString)) {
            $minLengthString = $string;
        }
    }

    echo "Chuỗi lớn nhất là $maxLengthString, độ dài = " . strlen($maxLengthString) . "<br>";
    echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = " . strlen($minLengthString);
?>

<?php
    function convertToUpper($arr) {
        return array_map('strtoupper', $arr);
    }
    echo '<p style = "color: red">Bai 9</p>';
    $arrs = ['1', 'b', 'C', 'E'];
    $result = convertToUpper($arrs);
    echo "Kết quả cho mảng 1: ";
    print_r($result);
    echo '<br>';
    $arrs1 = ['a', 0, null, false];
    $result1 = convertToUpper($arrs1);
    echo "Kết quả cho mảng 2: ";
    print_r($result1);
?>

<?php
    function convertTolower($arr) {
        return array_map('strtolower', $arr);
    }
    echo '<p style = "color: red">Bai 10</p>';
    $arrs = ['1', 'b', 'C', 'E'];
    $result = convertTolower($arrs);
    echo "Kết quả cho mảng 1: ";
    print_r($result);
    echo '<br>';
    $arrs1 = ['a', 0, null, false];
    $result1 = convertTolower($arrs1);
    echo "Kết quả cho mảng 2: ";
    print_r($result1);
?>

<?php
    echo '<p style = "color: red">Bai 11</p>';
    $array = array(1, 2, 3, 4, 5);
    $indexToRemove = 2; // Vị trí phần tử cần xóa (lưu ý vị trí bắt đầu từ 0)

    array_splice($array, $indexToRemove, 1); // Xóa 1 phần tử từ vị trí $indexToRemove

    $array = array_values($array); // Đảm bảo các key trong mảng là tuần tự

    print_r($array);
?>

<?php
    echo '<p style = "color: red">Bai 12</p>';
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    echo "Phan tu dau tien: " . reset($numbers) . '<br>';
    echo "Phan tu cuoi cung: " . end($numbers) . '<br>';
    echo "Phan tu lon nhat: " . max($numbers) . '<br>';
    echo "Phan tu nho nhat: " . min($numbers) . '<br>';
    echo "Tong gia tri cua mang tren: " . array_sum($numbers) . '<br>';
    ksort($numbers);
    echo "Sap xep theo thu tu tang dan theo key: ";
    print_r($numbers);
    echo '<br>'. "Sap xep theo thu tu dam dan theo key: ";
    krsort($numbers);
    print_r($numbers);

    echo '<br>';
    echo SORT_ASC;
    sort($numbers, SORT_ASC);
    print_r($numbers);
?>

<?php
    echo '<p style = "color: red">Bai 13</p>';
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $average = array_sum($numbers)/count($numbers);
    echo "Gia tri trung binh: " . $average . '<br>';

    echo "Các số lớn hơn giá trị trung bình: ";
    foreach ($numbers as $number) {
        if ($number > $average) {
            echo "$number" . ", ";
        }
    }
    echo "<br>";
    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: ";
    foreach ($numbers as $number) {
        if ($number <= $average) {
            echo "$number" . ", ";
        }
    }
    echo "<br>";
?>

<?php
    echo '<p style = "color: red">Bai 14</p>';
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];
    $result = [];
    
    foreach ($array2 as $key => $value) {
        $result[$key] = array_merge([$value], $array1[$key]);
    }
    
    print_r($result);
?>