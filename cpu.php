<?php
function isPrime($num) {
    if ($num < 2) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    
    return true;
}

function findPrimes($limit) {
    $primes = [];
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$start = microtime(true);
$limit = 500000; // Adjust this number to increase CPU usage
$primes = findPrimes($limit);
$end = microtime(true);

echo "Found " . count($primes) . " prime numbers up to $limit\n";
echo "Execution time: " . ($end - $start) . " seconds\n";
?>
