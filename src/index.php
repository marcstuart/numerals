<?php
require_once 'includes.php';


try {
    echo MyRomanNumeralGenerator::generate(4000);
} catch (Exception $e) {
    echo 'Caught Exception: ', $e->getMessage(), "\n";
}
