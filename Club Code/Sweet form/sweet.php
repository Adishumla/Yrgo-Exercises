<?php
// array with candy and price
$candy = [
    ['name' => 'Snickers', 'price' => 1.00],
    ['name' => 'M&Ms', 'price' => 1.50],
    ['name' => 'Twix', 'price' => 1.25],
    ['name' => 'Milky Way', 'price' => 1.75],
    ['name' => 'Kit Kat', 'price' => 1.25],
    ['name' => 'Reese\'s', 'price' => 1.50],
    ['name' => 'Butterfinger', 'price' => 1.00],
    ['name' => 'Sour Patch Kids', 'price' => 1.50],
    ['name' => 'Skittles', 'price' => 1.25],
    ['name' => 'Starburst', 'price' => 1.75],
    ['name' => 'Jolly Rancher', 'price' => 1.25],
    ['name' => 'Sour Punch', 'price' => 1.50],
    ['name' => 'Swedish Fish', 'price' => 1.00],
    ['name' => 'Gummy Bears', 'price' => 1.50],
    ['name' => 'Gummy Worms', 'price' => 1.25],
    ['name' => 'Gummy Sharks', 'price' => 1.75],
    ['name' => 'Gummy Octopus', 'price' => 1.25],
    ['name' => 'Gummy Squid', 'price' => 1.50],
    ['name' => 'Gummy Lobster', 'price' => 1.00],
    ['name' => 'Gummy Crab', 'price' => 1.50],
    ['name' => 'Gummy Shrimp', 'price' => 1.25],
    ['name' => 'Gummy Clam', 'price' => 1.75],
    ['name' => 'Gummy Oyster', 'price' => 1.25],
    ['name' => 'Gummy Mussels', 'price' => 1.50],
    ['name' => 'Gummy Snails', 'price' => 1.00],
    ['name' => 'Gummy Snails', 'price' => 1.50]
];
$money = 10.00;
// function to display the candy table with the candy name and price
// and a button to buy the candy and a button to remove the candy from cart
// and a button to to cheack out and display the total price of the candy in the cart
// when candy is added to cart update the money variable
// add table with candy in cart and total price of candy in cart
function displayCandy($candy, $money)
{
    echo "<table border=1 width=294>";
    echo "<tr><th colspan=3> Candy </th></tr>";
    echo "<tr><td width=42>Name</td><td width=42>Price</td><td width=42>Buy</td></tr>";
    for ($i = 0; $i < count($candy); $i++) {
        echo "<tr>";
        echo "<td>" . $candy[$i]['name'] . "</td>";
        echo "<td>" . $candy[$i]['price'] . "</td>";
        echo "<td><form action='sweet.php' method='post'><input type='hidden' name='candy' value='$i' /><input type='submit' name='submit' value='Buy' /></form></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<table border=1 width=294>";
    echo "<tr><th colspan=3> Cart </th></tr>";
    echo "<tr><td width=42>Name</td><td width=42>Price</td><td width=42>Remove</td></tr>";
    // save the candy in an array
    if (isset($_POST['submit'])) {
        $candyInCart = $_POST['candy'];
        $candyInCart = $candy[$candyInCart];
        // save the candy in an array 
        $candyInCart = $_POST['candy'];
        $candyInCart = $candy[$candyInCart];
        // update the money variable
        $money = $money - $candyInCart['price'];
        // display the candy in cart
        echo "<tr>";
        echo "<td>" . $candyInCart['name'] . "</td>";
        echo "<td>" . $candyInCart['price'] . "</td>";
        echo "<td><form action='sweet.php' method='post'><input type='hidden' name='candy' value='$i' /><input type='submit' name='submit' value='Remove' /></form></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br>";
    echo "<form action='candy.php' method='post'><input type='submit' name='submit' value='Check Out' /></form>";
    echo "<br>";
    echo "Money: $money";
}
displayCandy($candy, $money);
