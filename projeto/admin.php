<?php 
$conexao = mysqli_connect("localhost", "root", "root");
mysqli_select_db($conexao, "phpteste");

include_once("cabecalho.php");
/* $buscar = "SELECT id, nome, email, mensagem FROM contato";
$resultado = $conexao->query($buscar);


echo "Últimas mensagens</h3>";

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. "<br>" ."Email: ".$row["email"]. "<br>"."Mensagem: ". $row["mensagem"]. "<hr>";
    }
} else {
    echo "0 resultados";
} */
?>

<section class="generica">
                <h1 class="eu-heading">Quem sou eu</h1>
                <div class="eu-box">
                    <div class="eu-foto-box">
                        <img src="img/wendley.jpg" alt="Wendley" class="eu-foto">
                    </div>
                    <div class="eu-texto-box">
                       <h4>Wendeley Fernandes, 25</h4>
                       <p>Aspirante a Web Developer, gosta da parte Front-End da coisa e amante da tecnologia, procurando sempre a aprender mais e buscando novas ideias e práticas para aprimorar os conhecimentos.</p>
                    </div>
                </div>
                <div class="habilidades">
                        <h2>Algumas Habilidades</h2>
                        <br>
                        <ul>
                            <li><span class="icon fa-html5"> HTML5</span></li>
                            <li><span class="icon fa-css3"> CSS3</span></li>
                            <li><span class="icon fa-github"> GIT</span></li>
                            <li><span class="icon fa-wordpress"> Wordpress</span></li>
                        </ul>
                </div>
                <hr >
                <h3>Últimas mensagens</h3>
                <?php 
                $buscar = "SELECT id, nome, email, mensagem FROM contato";
                $resultado = $conexao->query($buscar);
                
                
                
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "Nome: " . $row["nome"]. "<br>" ."Email: ".$row["email"]. "<br>"."Mensagem: ". $row["mensagem"]. "<hr>";
                    }
                } else {
                    echo "0 resultados";
                }
                ?>
    </section>
<?php include_once("rodape.php") ?>