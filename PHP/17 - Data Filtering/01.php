<?php

declare(strict_types=1);

$secret = '<h1>T</h9>h<span>e S<bold>oci</red>al Ne<l3>twor<s>k</k>';

// TODO: Implement the filter sanitation here.
$secret = filter_var($secret, FILTER_UNSAFE_RAW);
echo $secret;
