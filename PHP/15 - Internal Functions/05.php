<?php

declare(strict_types=1);

$quote = 'llA smelborp era gnirob litnu er\'yeht ruoy .nwo';
$quote = explode(' ', $quote);
$quote = array_reverse($quote);
$quote = implode(' ', $quote);
$quote = strrev($quote);
echo $quote;
