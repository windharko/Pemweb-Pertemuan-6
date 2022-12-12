<?php
function romawi($num)
{
    $arr = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 
    'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $hasil = '';
    while ($num > 0) {
        foreach ($arr as $romawi => $ang) {
            if ($num >= $ang) {
                $num -= $ang;
                $hasil .= $romawi;
                break;
            }
        }
    }
    return $hasil;
}
echo romawi(86),"<br>";
echo romawi(999);
?>