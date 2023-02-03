<?php

$user = Auth::user();

echo "Welcome, " . $user->name . "!";
