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