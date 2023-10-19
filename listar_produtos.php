<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<style>
		

		h1{
			text-align: center;
			font-size: 40px;
			border-color: black;

		}

	</style>

	<body>
		<div class = "container" style  = "margin-top: 40px">
			<h1> Lista de produtos</h1>
			<br>		
					<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Numero do produto</th>
		      <th scope="col">Nome do produto</th>
		      <th scope="col">Categoria</th>
		      <th scope="col">Quantidade</th>
		      <th scope="col">Fornecedor</th>
		    </tr>
		  </thead>

		  <?php
		  	include 'conexao.php';
		  	$sql = "SELECT * FROM estoque";
		  	$busca = mysqli_query($conexao, $sql);
		  	while($array = mysqli_fetch_array($busca)){
		  		$nroproduto = $array['nroproduto'];
		  		$nomeproduto = $array['nomeproduto'];
		  		$categoria = $array['categoria'];
		  		$quantidade = $array['quantidade'];
		  		$fornecedor = $array['fornecedor'];
		  	}




		  ?>



		  
		    <tr>

		      
		      <td><?php echo $nroproduto ?></td>
		      <td><?php echo $nomeproduto ?></td>
		      <td><?php echo $categoria ?></td>
		      <td><?php echo $quantidade ?></td>
		      <td><?php echo $fornecedor ?></td>

		    </tr>
		    
		     
		</table>
			


		</div>
	


	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>