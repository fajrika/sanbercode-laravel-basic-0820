<?php
function tentukan_nilai($number)
{
    if ($number > 85 && $number <= 100)
        return 'Sangat Baik<br>';
    elseif ($number >= 70)
        return 'Baik<br>';
    elseif ($number >= 60)
        return 'Cukup<br>';
    elseif ($number >= 0)
        return 'Kurang<br>';
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
