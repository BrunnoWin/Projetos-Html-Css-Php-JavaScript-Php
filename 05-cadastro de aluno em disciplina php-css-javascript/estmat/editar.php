<?php
require_once 'conecta.php';
$id = $_REQUEST["idaluno"];
//echo "$id";
$consulta = $pdo->query("SELECT * FROM aluno WHERE idaluno = $id;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	echo "
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Cadastro de alunos</title>
</head>
<body>
<form action='atualizar.php' method='post'>
	<fieldset name='dadosalunos' style='max-width: 500px;'>
		<legend>Cadastro de Alunos</legend>
		<p>Matricula:<input type='text' name='matricula' value='".$linha['matricula']."' maxlength='12'></p>
		<p>Nome:<input type='text' name='nome' value='".$linha['nome']."' maxlength='50'>&nbsp;&nbsp;<a href=busca.php><img src='imgs/lupa.png' width='20' height='20' align='center'></a></p>
		<p>Telefone:<input type='text' name='telefone' value='".$linha['telefone']."' maxlength='14'></p>
		<p>E-mail:<input type='text' name='email' value='".$linha['email']."' maxlength='40'></p>
		<p>Curso:<select name='curso'>
		    <option selected>".$linha['curso']."</option>
			<option>ADS</option>
			<option>Design</option>
		</select>
        Turno:<select name='turno'>
            <option selected>".$linha['turno']."</option>
			<option>mat</option>
			<option>not</option>
		</select>
        Período:<select name='periodo'>
            <option selected>".$linha['periodo']."</option>
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
	<input type='hidden' name='status' value='ativo'>
	<input type='hidden' name='idaluno' value='".$linha['idaluno']."'>
	<hr>
	<input type='submit' name='btsalvar' value='Salvar Dados...'>
	</fieldset>
</form>
</body>
</html>
";
}
?>