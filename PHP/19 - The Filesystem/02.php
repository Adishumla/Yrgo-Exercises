<?php

$file = 'bill-mulder.txt';
$current = file_get_contents($file);
$current  = 'William "Bill" Mulder is portrayed by Peter Donat. William was the father of Fox and Samantha Mulder and husband of Teena Mulder. He was born in California in 1936. As a young man, he began working for the government and eventually the State Department.';

file_put_contents($file, $current);
