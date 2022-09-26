<?php
//function that deals a poker hand of five cards
function dealHand()
{
    $suits = ['clubs', 'diamonds', 'hearts', 'spades'];
    $faces = ['ace', 'king', 'queen', 'jack', '10', '9', '8', '7', '6', '5', '4', '3', '2'];
    $hand = [];
    for ($i = 0; $i < 5; $i++) {
        $hand[] = [
            'face' => $faces[rand(0, 12)],
            'suit' => $suits[rand(0, 3)]
        ];
    }
    return $hand;
}
//function that displays a poker hand
function displayHand($hand)
{
    foreach ($hand as $card) {
        echo "<img src=\"Playing Cards\SVG-cards-1.3/{$card['face']}_of_{$card['suit']}.svg\" alt=\"{$card['face']} of {$card['suit']}\">";
    }
}
$hand = dealHand();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Deck of Cards</title>
</head>

<body>
    <h1>Deck of Cards</h1>
    <p>Click the button to deal a hand of five cards.</p>

    <div>
        <?php
        echo displayHand($hand);
        ?>

    </div>
    <button onclick="window.location.reload()">Deal</button>


</body>

</html>