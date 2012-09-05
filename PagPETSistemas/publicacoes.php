<h1>Publicações</h1>
<div style =	"border-top: 1px solid gray;
				border-bottom: 1px solid gray;
				margin-bottom: 50px;
				height: 40px;
				background-color: #F8F8F8;">
				
<h2>Últimas publicações<h2>
</div>

<?php
$numproj = 6;
$count = 1;

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
	$count += 1;
}


?>