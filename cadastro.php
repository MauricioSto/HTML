<?php 
//Gravando no banco de dados !
$servidor="localhost"; //endereço do servidor
$usuario ="root";
$senha = "";
$banco = "allnet";
$conexao = new MySQLi($servidor,$usuario,$senha,$banco);

if (mysqli_connect_error()){
	echo "Erro ao conectar com o MySQL:".mysqli_connect_error();
	//usamos o if para verificar se a conexao gerou algum erro.
	//se sim mostramos na tela com o tipo de erro.
}

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULARIO !
$nome		= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulario para variavel	
$email		= $_POST ["email"];	//atribuição do campo "email" vindo do formulario para variavel
$sexo		= $_POST ["sexo"];	//atribuição do campo "sexo" vindo do formulario para variavel
$ddd		= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulario para variavel
$telefone	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulario para variavel
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulario para variavel
$cidade		= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulario para variavel
$estado		= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulario para variavel
$bairro 	= $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulario para variavel
$pais		= $_POST ["pais"];	//atribuição do campo "pais" vindo do formulario para variavel
$login		= $_POST ["login"];	//atribuição do campo "login" vindo do formulario para variavel
$senha		= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulario para variavel

// conectar com o banco de dados e gravar os dados.

$sql = "INSERT INTO clientes(nome,email,sexo,ddd,telefone,endereco,cidade,estado,bairro,pais,login,senha) 
VALUES ( '$nome', '$email', '$sexo', '$ddd', '$telefone', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha')";

mysqli_query($conexao,$sql);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

?> 

