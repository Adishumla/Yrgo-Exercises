<?php

$db = new PDO('sqlite:startrek.db');
$characters = $db->query('SELECT characters.name as character, actors.name as actor FROM characters 
inner join actors on characters.actor_id = actors.id
order by characters.name
limit 5');
$characters_array = $characters->fetchAll(PDO::FETCH_ASSOC);

foreach ($characters_array as $character) {
    echo $character['character'] . ' is portrayed by ' . $character['actor'] . '<br>';
}
