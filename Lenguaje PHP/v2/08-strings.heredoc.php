<?php
declare(strict_types=1);




//string HEREDOC

//ejemplo 1

$he = 'Bob';
$she = 'Allice';

$text = <<<TEXT
$he said "PHP is awesome"
"Of course" $she agreed." 
TEXT;
echo $text;
?>

