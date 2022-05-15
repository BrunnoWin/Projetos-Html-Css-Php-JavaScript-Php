<?php
$id = $_REQUEST['idaluno'];
//echo "$id";
try {
  $pdo = new PDO('mysql:host=localhost;dbname=estmat', 'root', Null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('DELETE FROM aluno WHERE idaluno = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  echo "<script>alert('Registro apagado com sucesso.');window.location.assign('busca.php');</script>";
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>