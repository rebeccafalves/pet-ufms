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
<div style="float:left;height:150px;width:150px"><img src="images/pet.jpg" style="width:150px;height:150px"/></div>

<div style="margin-left:86px">

			
<h2><a href="index.php" style =	"font-size: 20px;
								color: black;"><p>
								Apostila de C, C++</p></a></h2>
								
<p>O professor Fábio Viduani Martinez, professor da Facom, publicou em 2012 a Apostila sobre C e C++, são coletâneas de textos para o ensinamento de tais 
linguagens. De forma didática, cada assunto possui exercícios para fixar o conteúdo. Atualmente ministra a aula de Análise de Algoritmo para o sexto semestre 
do curso Análise de Sistema.  </p>
<p> Em 2013, o professor vai realizar seu pós-doutorado na Alemanha, voltando somente após 2015.  </p>
</div>
<br />
<hr>


<?php
	$count += 1;
}


?>