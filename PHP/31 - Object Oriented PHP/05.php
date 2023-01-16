<?php
require __DIR__ . "/src/School.php";
require __DIR__ . "/src/Program.php";

$school = new School('Yrgo');
$school->addProgram(new Program('Webbutveckling'));
$school->addProgram(new Program('UX Design'));
$school->addProgram(new Program('Speldesign'));

?>

<p>At Yrgo you can apply to the following programs:</p>
<ul>
    <?php foreach ($school->getPrograms() as $program) : ?>
        <li><?= $program->name ?></li>
    <?php endforeach ?>
</ul>