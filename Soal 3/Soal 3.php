<?php
function cekBrackets($input) {
    // Daftar tanda kurung buka dan tutup
    $bracket_buka[] = "{"; $bracket_buka2[] = "["; $bracket_buka3[] = "(";
    $bracket_nutup[] = "}"; $bracket_nutup2[] = "]"; $bracket_nutup3[] = ")";

    // Loop melalui setiap karakter dalam input
    for ($i = 0; $i < strlen($input) - 1; $i++) {
        // Periksa kombinasi tanda kurung buka dan tutup
        if($input[$i] == $bracket_buka[$i] && $input[$i+1] == $bracket_nutup[$i] || $input[$i] == $bracket_buka[$i] && $input[$i + 1] == $bracket_nutup2[$i] || $input[$i] == $bracket_buka[$i] && $input[$i + 1] == $bracket_nutup3[$i] ||
           $input[$i] == $bracket_buka2[$i] && $input[$i+1] == $bracket_nutup2[$i] || $input[$i] == $bracket_buka2[$i] && $input[$i + 1] == $bracket_nutup[$i] || $input[$i] == $bracket_buka2[$i] && $input[$i + 1] == $bracket_nutup3[$i] ||
           $input[$i] == $bracket_buka3[$i] && $input[$i+1] == $bracket_nutup3[$i] || $input[$i] == $bracket_buka3[$i] && $input[$i + 1] == $bracket_nutup2[$i] || $input[$i] == $bracket_buka3[$i]&& $input[$i + 1] == $bracket_nutup[$i]
           )
        {
            echo "YES\n";
            return;
        }
    }
    // Output no jika bracket pasangan tidak sama/valid
    echo "NO\n";
}

// input pengguna
$input = trim(fgets(STDIN));
cekBrackets($input);
