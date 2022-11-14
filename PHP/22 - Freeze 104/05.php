<?php


file_put_contents($file = 'counter.txt', $value = (int) file_get_contents($file) + 1);

echo 'Number of page views: ' . $value;
