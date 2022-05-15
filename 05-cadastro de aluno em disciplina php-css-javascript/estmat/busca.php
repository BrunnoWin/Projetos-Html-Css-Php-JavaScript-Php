<?php
require_once 'conecta.php';
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
$cor = "#ffffff";


$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
echo "<table border=1 class=table>
        <tr bgcolor=#00BFFF>
          <td class=text-center>ID</td>
          <td class=text-center>Matricula</td>
          <td class=text-center>Nome</td>
          <td class=text-center>Curso</td>
          <td class=text-center></td>
          <td class=text-center></td>
        </tr>
 ";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	if ($cor == "#ffffff"){$cor = "#cccccc";}else{$cor = "#ffffff";}
    echo " 
        <tr bgcolor=$cor>
          <td class=text-center>{$linha['idaluno']}</td>
          <td>{$linha['matricula']}</td>
          <td>{$linha['nome']}</td>
          <td>{$linha['curso']}</td>
          <td class=text-center><a href=deletar.php?idaluno={$linha['idaluno']} onclick=\"return confirm('Deseja realmente apagar o registro?'); return false;\"><img src=imgs/del.png width=30 heigth=30 title='Deletar registro.'></a></td>
          <td class=text-center><a href=editar.php?idaluno={$linha['idaluno']}><img src=imgs/edit.png width=30 heigth=30 title='Editar registro.'></a></td>
        </tr>
";
}
echo "</table><img src=imgs/print.png width=30 heigth=30 onclick=print();>";
?>