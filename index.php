<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		
	</style>

</head>
<body>

<div class="container" id ="tamanhoContainer" style="margin-top: 40px;">
	<h4>Formulário de Cadastro</h4>
	<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
		<div class="mb-3">
	    	<label >Nro de registro</label>
	    	<input type="number" class="form-control" name="nroproduto"  placeholder="Insira o Nro do produto" required>
		</div>
		<div class="mb-3">
	    	<label >Nome do Produto</label>
	    	<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o Nome do produto" required>
		</div>
		
		<div class="mb-3">
			<label>Categoria</label>
	    	<select class="form-select" name="categoria" >
			 
			  <option >Periféricos</option>
			  <option >Hardware</option>
			  <option >Software</option>
			  <option >Celulares</option>
			
			</select>
		</div>
		<div class="mb-3">
	    	<label >Quantidade</label>
	    	<input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" required>
		</div>
		<div class="mb-3">
			<label>Fornecedor</label>
	    	<select class="form-control" name="fornecedor">
			
			  <option >Fornecedor A</option>
			  <option >Fornecedor B</option>
			  <option >Fornecedor C</option>
			
			
			</select>
		</div>
		<div style="text-align: right;">
		<button type="submit" class="btn btn-success">Cadastrar</button>
		</div>
	</form>
</div>












<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>