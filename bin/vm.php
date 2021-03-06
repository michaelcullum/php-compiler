<?php

use PHPCompiler\Runtime;

function run(string $filename, string $code, array $options) {
    $runtime = new Runtime;
    $block = $runtime->parseAndCompile($code, $filename);
    if (!isset($options['-l'])) {
        $runtime->run($block);
    }
}

require_once __DIR__ . '/../src/cli.php';