<html>

<head>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                } 
            });
        });
    </script>
    <title>Projeto Design de Interface para Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-main">
            <header class="cabecalho">
                <div class="cabecalho-text-box">
                    <h1>Minha Galeria</h1>
                    <p>Projeto de Programação Dinâmica para Web</p>
                </div>
            </header>
            <nav class="navegacao">
                <ul>
                    <li class="item">
                        <a href="index.php">
                            <span class="icon fa-home"> home</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#form">
                            <span class="icon fa-sticky-note"> formulário</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="admin.php">
                            <span class="icon fa-sticky-note"> Entrar no Sistema</span>
                        </a>
                    </li>
                </ul>
            </nav>