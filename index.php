<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mod Móveis</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <div class="container">
        <?php require_once "header.php" ?>
        <h1 class="taviraj">A casa dos seus sonhos com nossos produtos</h1>
        <div id="buy-link">
            <a id="home" href="">Compre Agora</a>
        </div>            
           
        <div id="home-container">
            <div id="home-cards">
                <div class="card">
                    <img src="imagens/alta-qualidade-icon.png">
                    <h2>Alta Qualidade</h2>
                    <p>Produtos produzidos com as melhores matérias primas</p>
                </div>
                <div class="card">
                    <img src="imagens/frete-gratis-icon.png">
                    <h2>Frete Grátis</h2>
                    <p>Receba grátis na sua casa em qualquer lugar do país</p>
                </div>
                <div class="card">
                    <img src="imagens/atendimento-icon.png">
                    <h2>Atendimento</h2>
                    <p>Um pós venda ativo maximizando sua satisfação</p>
                </div>
            </div>
            <div id="departamentos">
                <h3>Departamentos</h3><br><br>
                <div class="card">
                    <button class="btn-departamento" id="btn-cadeira"><br><img src="imagens/cadeira-icon.png"><p>Cadeiras</p></button>
                </div>
                <div style="left: 202px" class="card">
                    <button class="btn-departamento" id="btn-sofa"><br><img src="imagens/sofa-icon.png"><p>Sofá</p></button>
                </div>
                <div style="left: 403px;" class="card">
                    <button class="btn-departamento" id="btn-iluminacao"><br><img src="imagens/iluminacao-icon.png"><p>Iluminação</p></button>
                </div>
                <div style="left: 604px;" class="card">
                    <button class="btn-departamento" id="btn-mesa"><br><img src="imagens/mesa-icon.png"><p>Mesa</p></button>
                </div>
                <div style="left: 805px;" class="card">
                    <button class="btn-departamento" id="btn-armario"><br><img src="imagens/armario-icon.png"><p>Armário</p></button>
                </div>
                <div style="left: 1006px;" class="card">
                    <button class="btn-departamento" id="btn-acessorios"><br><img src="imagens/acessorios-icon.png"><p>Acessórios</p></button>
                </div>
                <h3 id="nossos-produtos">Nossos Produtos</h3>
                <div id="produtos">
                    <div class="prod-card">
                        <img src="imagens/prod1.png" class="prod-img">
                        <h4 class="prod-nome">Sofá Verde</h4>
                        <h5 class="prod-preco">R$1.896</h5>
                    </div>
                    <div class="prod-card">
                        <img src="imagens/prod2.png" class="prod-img">
                        <h4 class="prod-nome">Sofá Amarelo</h4>
                        <h5 class="prod-preco">R$2.689</h5>
                    </div>
                    <div class="prod-card">
                        <img src="imagens/prod3.png" class="prod-img">
                        <h4 class="prod-nome">Cadeira Azul</h4>
                        <h5 class="prod-preco">$998</h5>
                    </div>
                    <div class="prod-card">
                        <img src="imagens/prod4.png" class="prod-img">
                        <h4 class="prod-nome">Cadeira Preta</h4>
                        <h5 class="prod-preco">R$696</h5>
                    </div>
                </div>
                <div id="veja-mais">
                    <a href="#">Veja Mais</a>
                </div>              
            </div>
            <h3 id="depoimento-title">Depoimentos</h3>
            <div id="depoimentos">
                <div class="depoimento-card" style="border: 2px solid rgba(115, 66, 35, 1);">
                    <h2>“</h2>
                    <p>Etiam ultrices felis ex, ac bibendum purus vehicula in. Phasellus vel leo sed nulla accun malesuada a in ligula. Nullam interdum eque et condimentum sagittis. Vivamus contetur accumsan ligula. </p>
                    <hr>
                    <div class="user-photo"></div>
                    <h3>Léopold Duguay</h3>
                    <h4>Cabinetmakers</h4>
                </div>
                <div class="depoimento-card">
                    <h2>“</h2>
                    <p>Etiam ultrices felis ex, ac bibendum purus vehicula in. Phasellus vel leo sed nulla accun malesuada a in ligula. Nullam interdum eque et condimentum sagittis. Vivamus contetur accumsan ligula. </p>
                    <hr>
                    <div class="user-photo"></div>
                    <h3>Philbert Blanchar</h3>
                    <h4>Furniture assembler</h4>
                </div>
                <div class="depoimento-card">
                    <h2>“</h2>
                    <p>Etiam ultrices felis ex, ac bibendum purus vehicula in. Phasellus vel leo sed nulla accun malesuada a in ligula. Nullam interdum eque et condimentum sagittis. Vivamus contetur accumsan ligula. </p>
                    <hr>
                    <div class="user-photo"></div>
                    <h3>Veillantif Brisbois</h3>
                    <h4>Furniture finishers</h4>
                </div>
            </div>
            <div id="newsletter">
                <h2>Assine nossa Newsletter</h2>
                <p>Deixe seu email abaixo e receba no seu email nossos lançamentos e promoções</p>
                <form>
                    <input type="email" placeholder="Seu email">
                    <button type="submit">Assine</button>
                <form>
            </div>
            <footer>
                <ul>
                    <li id="sobre-title">Mod Móveis</li>
                    <li id="sobre">Somos uma empresa focada em desenvolver os melhores móveis para você e sua família. Rigoroso critério na escolha das matérias primas e design moderno</li>
                </ul>
                <div class="direito">
                    <div class="opcao">
                        <h4>Suporte</h4>
                        <ul>
                            <li>LGPD</li>
                            <li>Pagamento</li>
                            <li>Entrega</li>
                            <li>Trocas e devoluções</li>
                        </ul>
                    </div>
                    <div class="opcao">
                        <h4>Institucional</h4>
                        <ul>
                            <li>Home</li>
                            <li>Departamentos</li>
                            <li>Sobre</li>
                            <li>Contato</li>
                        </ul>
                    </div>
                    <div id="ultimo" class="opcao">
                        <h4>Mídia Social</h4>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <pre>Copyrights @2022 | Mod Móveis   -   Todos os direitos reservados</pre>
            </footer>
        </div>
    </div>
    

   <script src="js/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>