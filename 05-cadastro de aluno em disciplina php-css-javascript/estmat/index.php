<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Cadastro de alunos</title>
</head>
<body>
<form action="gravar.php" method="post">
	<fieldset class="border p-2" name="dadosalunos" style="max-width: 800px;">
		<legend>Cadastro de Alunos</legend>
		<p>Matricula:<input type="text" class="form-control" name="matricula" maxlength="12"></p>
		<p>Nome:<input type="text" class="form-control" name="nome" maxlength="50">&nbsp;&nbsp;<a href=busca.php><img src="imgs/lupa.png" width="20" height="20" align="center"></a></p>
		<p>Telefone:<input type="text" class="form-control" name="telefone" maxlength="14"></p>
		<p>E-mail:<input type="text" class="form-control" name="email" maxlength="40"></p>
		<p>Curso:<select class="form-control" name="curso">
			<option>ADS</option>
			<option>Design</option>
		</select>
        Turno:<select class="form-control" name="turno">
			<option>mat</option>
			<option>not</option>
		</select>
        Período:<select class="form-control" name="periodo">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
		</select>
	</p>
	<input type="hidden" name="status" value="ativo">
	<hr>
	<input type="submit" class="btn btn-primary" name="btsalvar" value="Salvar Dados...">
	</fieldset>
</form>
</body>
</html>