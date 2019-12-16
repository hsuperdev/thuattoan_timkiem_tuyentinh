<?php
    function search($array, $item) {
        for ($i = 0; $i < count($array); $i++) {
            if ($item == $array[$i]) {
                return true;
            }
        }
        return false;
    }

    $myArray = [12, 34 ,56 , 12];

    if (search($myArray, 121)) {
        echo "Tim thay chuoi";
    } else {
        echo "Khong tim thay chuoi";
    }
?>

