<?php

function sanitizeName(string $name): string
{
    return strtolower(filter_var($name, FILTER_UNSAFE_RAW));
}
