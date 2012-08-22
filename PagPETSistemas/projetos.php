<h1>Projetos</h1>
<div id="div1">
<h2>Últimos projetos<h2>
</div>

<?php
$numproj = 6;
$count = 1;
while($numproj > 0 && $count <= 10 && $count <= $numproj) {
	echo '<a href="index.php"><img src="images/interrogacao.jpg" alt="interrogacao" align="left" width="76px" height="76px"></a>';
	echo '<div style="margin-left:86px">';
	echo '<p class="p1"><b>Lorem</b></p>';
	echo '<h2><a href="index.php" class="link">Lorem ipsum</a></h2>';
	echo '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>';
	echo '</div>';
	echo '<br />';
	echo '<hr>';
	$count += 1;
}
?>