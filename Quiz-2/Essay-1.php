<?php
function hitung($string_data)
{
    if (strpos($string_data, "*") !== false) {
        $tmp = explode("*", $string_data);
        echo ($tmp[0] * $tmp[1]);
    } elseif (strpos($string_data, ":") !== false) {
        $tmp = explode(":", $string_data);
        echo ($tmp[0] / $tmp[1]);
    } elseif (strpos($string_data, "+") !== false) {
        $tmp = explode("+", $string_data);
        echo ($tmp[0] + $tmp[1]);
    } elseif (strpos($string_data, "-") !== false) {
        $tmp = explode("-", $string_data);
        echo ($tmp[0] - $tmp[1]);
    } elseif (strpos($string_data, "%") !== false) {
        $tmp = explode("%", $string_data);
        echo ($tmp[0] % $tmp[1]);
    }
    echo ("<br>");
}

echo hitung("102*2");   //204
echo hitung("2+3");     //5
echo hitung("100:25");  //4
echo hitung("100%2");   //0
echo hitung("99-2");    //97
