<?php

if ($argc == 1) {
    echo "You should pass a .json file as a parameter (For example: 'php 03.php logbook.json')";
}
if (isset($argv[1]) && preg_match('/\.json$/', $argv[1])) {

    if (file_exists($argv[1])) {
        $visits = file_get_contents($argv[1]);
        $visits = json_decode($visits, true);
        usort($visits, function ($a, $b) {
            return $a['arrival_date'] <=> $b['arrival_date'];
        });
        $features = array_column($visits, 'features');
        $features_items = array_column($features, 'name');
        $features_items_unique = array_unique(array_merge($features_items));
        foreach ($visits as $visit) {
            printf("Arrival on %s at  %s, where I used %s features\n", $visit['arrival_date'], $visit['hotel'], count($visit['features']));
        }
        printf("---\n");
        printf("you visited hotels of %s different star-catagories while spending $%s,\n", count(array_unique(array_column($visits, 'stars'))), array_sum(array_column($visits, 'total_cost')));
        printf("perhaps on some of the %s different features that you've used.\n", count($features_items_unique));
    } else {
        echo 'No file exists';
    }
}
