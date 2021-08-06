<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "descart_bd";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// FETCH DATA
$sql = mysqli_query($conn, "SELECT * FROM getapi");

// STORE DATA IN result VARIABLE
$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));


// try {
// 	$pdo = new PDO("mysql:bdname=descart_bd;host=localhost","root","123456");
// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch (PDOException $e) {
// 	echo '<p>Erro ao conectar: ' .$e->getMessage(). '</p>';
// }

//  function trazer(){
// 	$stmt = $this->$pdo->prepare('SELECT * FROM getapi WHERE id = :id');
// 	$stmt->execute( array('id' => $id ));
// 	$resultado = $stmt->fetchALL();

// 	foreach($resultado as $key){
// 		var_dump($key);
// 	}
// }