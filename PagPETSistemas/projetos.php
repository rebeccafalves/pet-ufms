<h2 id="h2_custom1">Últimos projetos<h2>

<?php
$numproj = 6;
$count = 1;

echo '<div>' . "\n";
echo '<p id="p_custom1"><b>Lorem</b></p>' . "\n";
echo '<h2 id="h2_custom2"><a href="index.php" class="link">Lorem ipsum</a></h2>' . "\n";
echo '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>' . "\n";
echo '</div>' . "\n"; 
echo "\n";

while($numproj > 0 && $count <= 10 && $count < $numproj) {
	echo '<div id="div_custom1">' . "\n";
	echo '<p id="p_custom1"><b>Lorem</b></p>' . "\n";
	echo '<h2 id="h2_custom2"><a href="index.php" class="link">Lorem ipsum</a></h2>' . "\n";
	echo '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>' . "\n";
	echo '</div>' . "\n"; 
	echo "\n";
	$count += 1;
}
?>