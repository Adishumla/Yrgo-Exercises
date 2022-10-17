<?php
$quotes = array(
    "Come play with us, Danny.",
    "He's the little boy that lives in his mouth.",
    "Here's Johnny!",
    "Here's to five miserable months on the wagon, and all the irreparable harm it has caused me.",
    "Some places are like people: some shine and some don't.",
    "Wendy, I'm home."
);
?>
<ol>
    <?php
    foreach ($quotes as $quote) :
        if (strlen($quote) < 30) {
            echo "<li>" . $quote . "</li>";
        }
    endforeach;
    ?>
</ol>