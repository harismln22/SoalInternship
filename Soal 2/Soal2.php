<?php
function processRanks($n, $m, $k, $l) {
    // Inisialisasi variabel
    $rank = array_fill(0, $n, $n); // Array rank diisi dengan nilai $n
    $result = [];

    for ($h = 0; $h < $k; $h++) {
        $posisi = $rank[0]; // Posisi awal diambil dari rank pertama

        for ($u = $n - 1; $u >= 0; $u--) {
            if ($l[$h] > $m[$u]) {
                $posisi = $rank[$u];
            }
        }

        // Penyesuaian posisi berdasarkan kondisi
        if ($l[$h] < $m[$h]) {
            $posisi -= $h;
        } elseif ($l[$h] == $m[$h]) {
            $posisi -= $h;
        } else {
            $posisi -= $h;
        }

        // Simpan hasil posisi ke array hasil
        $result[] = $posisi;
    }

    return $result;
}

// Input dari pengguna
$n = (int)trim(fgets(STDIN));

// Input elemen untuk array m dalam satu baris
$m = array_map('intval', explode(' ', trim(fgets(STDIN))));

$k = (int)trim(fgets(STDIN));

// Input elemen untuk array l dalam satu baris
$l = array_map('intval', explode(' ', trim(fgets(STDIN))));

$results = processRanks($n, $m, $k, $l);

// Cetak hasil
foreach ($results as $res) {
    echo "$res ";
}
