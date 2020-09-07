<?php
function perolehan_medali($data = null)
{
    if ($data) {
        $tmp = [];
        foreach ($data as $k => $v) {
            $index = array_search($v[0], array_column($tmp, 'negara'));
            if ($index === false) {
                $tmp[] = [
                    "negara" => $v[0],
                    "emas" => 0,
                    "perak" => 0,
                    "perunggu" => 0
                ];
                $index = count($tmp) - 1;
            }
            $tmp[$index][$v[1]] += 1;
        }
        return $tmp;
    }
    return 'no data';
}

print_r(
    perolehan_medali([
        ['Indonesia', 'emas'],
        ['India', 'perak'],
        ['Korea Selatan', 'emas'],
        ['India', 'perak'],
        ['India', 'emas'],
        ['Indonesia', 'perak'],
        ['Indonesia', 'emas'],
    ])
);
