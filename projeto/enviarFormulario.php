<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$conexao = mysqli_connect("localhost", "root", "root");
mysqli_select_db($conexao, "phpteste");

if($conexao){
    echo "Mensagem enviada para o banco de dados.";
}else{
    echo "Conexão não estabelecida";
}

mysqli_query($conexao, "INSERT INTO contato (nome, email, mensagem) VALUES('{$nome}', '{$email}', '{$mensagem}')");

$buscar = "SELECT id, nome, email, mensagem FROM contato";
$resultado = $conexao->query($buscar);


echo "<h3>Mensagens no banco de dados</h3>";

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. "<br>" ."Email: ".$row["email"]. "<br>"."Mensagem: ". $row["mensagem"]. "<hr>";
    }
} else {
    echo "0 resultados";
}

 
//Fecha a conexao
mysqli_close($conexao);

?>
<br />
<a href="../miniprojeto">Voltar</a>