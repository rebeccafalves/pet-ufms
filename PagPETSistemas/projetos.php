<<<<<<< HEAD
<h2 id="h2_custom1">Últimos projetos<h2>
=======
<h1>Projetos</h1>
<div style =	"border-top: 1px solid gray;
				border-bottom: 1px solid gray;
				margin-bottom: 50px;
				height: 40px;
				background-color: #F8F8F8;">
				
<h2>Últimos projetos<h2>
</div>
>>>>>>> c544c6bbfca556a813be239a4282e2eb0bcd817c

<?php
$numproj = 6;
$count = 1;

<<<<<<< HEAD
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
=======
while($numproj > 0 && $count <= 10 && $count <= $numproj) {
?>

<a href="index.php"><img src="images/interrogacao.jpg" alt="interrogacao" align="left" width="76px" height="76px"></a>

<div style="margin-left:86px">
<p style =	"font-size:11px;
			line-height: 5%;">
			<b>Lorem</b></p>
			
<h2><a href="index.php" style =	"font-size: 20px;
								color: black;">
								Lorem ipsum</a></h2>
								
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
</div>
<br />
<hr>


<?php
>>>>>>> c544c6bbfca556a813be239a4282e2eb0bcd817c
	$count += 1;
}


?>