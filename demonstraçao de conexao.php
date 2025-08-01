<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

//Conectando com o Banco de dados PostgreSQL
$stringConn = "host=".HOST." dbname=".DBNAME." user=".USER." password=".PASSWORD;
$conn = pg_connect($stringConn) or die( ' Ocorreu um erro e não foi possível conectar ao banco de dados.' );

//Realizando uma consulta no BD
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
$result = pg_query( $conn, $instrucaoSQL ) or die(' Ocorreu um erro na execução da instrução: ' . $instrucaoSQL );

//pg_query($dbcon, "SELECT id, nome FROM clientes");

//Imprimindo os dados da consulta
while ($row = pg_fetch_array( $result )){
	echo $row['nome'] . "\t";
	echo $row['cpf'] . "\t";
	echo $row['telefone'] . "\n";
}

//Encerrando a conexão
pg_close($conn);


/* demonstração só que com Mysql:

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

//Conectando com o Servidor
$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die( ' Não foi possível conectar.' );

//Realizando uma consulta no BD
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
$stmt = mysqli_prepare($conn, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $nome, $cpf, $tel);
mysqli_stmt_execute($stmt);

while (mysqli_stmt_fetch($stmt)) {
	echo $nome . "\t";
	echo $cpf . "\t";
	echo $tel . "\n";
}

//Encerrando a conexão
mysqli_close($conn); */