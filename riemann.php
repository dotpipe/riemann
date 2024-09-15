<?php

$primes = [];
for ($i = 0 ; $i < 10000000 ; $i++) {
    if (sqrt($i) == floor(sqrt($i) + 0.49)) {
        continue;
    }
    $nogo = false;
    foreach ($primes as $value) {
        if ($i%$value == 0) {
            $nogo = true;
            break;
        }
    }
    if ($nogo)
        continue;
    // therefore
    $primes[] = $i;
    print($i . " ");
}