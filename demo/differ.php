<?php

include_once dirname(__DIR__) . '/vendor/autoload.php';

//$differ = new \Bavix\Diff\Differ();
$differ = new \Bavix\Diff\Native();

$patch = $differ->diff('foo', 'bar');

print $patch . PHP_EOL;
print $differ->patch('foo', $patch) . PHP_EOL . PHP_EOL;
