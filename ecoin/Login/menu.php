<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu.css" type="text/css">
    <script src="menu.js"></script>
    <title>Inicio</title>
</head>
<body>
    <section id="base">
        <a id="conta" href="login.html"> MINHA CONTA </a>
        <?php
            include('../Sessao/confirmasessao.php');
                if(isset($_SESSION['usuario'])){
                    echo "<a class='sair' href='../Sessao/deletasessao.php'> SAIR </a>";
                }
            ?>
        <a href="../Produtos/ProdutosCsGo.php" id="games"> OUTROS JOGOS </a>
    </section>
    <main id="csgo" name="main">
        <div id="container-esquerda">
            <div class="bloco" onclick="fortnite()">
                <img src="https://wallpapercave.com/wp/wp5929022.png">
            </div>
            <div class="bloco" onclick="csgo()">
                <img src="https://dmarket.com/blog/best-csgo-wallpapers/tercsgo_huc01d3a403c050d47715d6aeed15b344f_839613_1920x1080_resize_q75_lanczos.jpg">
            </div>
            <div class="bloco" onclick="lol()">
                <img src="https://i.pinimg.com/originals/22/49/0d/22490db63367ba74ec73e9e913343f09.jpg">
            </div>
        </div>
        <div id="container-direita">
            <div id="texto">
                <h2> COUNTER STRIKE: GLOBAL OFFENSIVE</h2>
                <h3> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</h3>
            </div>
            <div class="comprarcreditos">
                <a href= ../Produtos/ProdutosCsGo.php> COMPRAR CRÉDITOS </a>
            </div>
        </div>
        
        <img class="background" src="../Produtos/ProdutosCsGo/csgoo.jpg">
    </main>
    <section id="fortnite">
        <div id="container-esquerda">
            <div class="bloco" onclick="fortnite()">
                <img src="https://wallpapercave.com/wp/wp5929022.png">
            </div>
            <div class="bloco" onclick="csgo()">
                <img src="https://dmarket.com/blog/best-csgo-wallpapers/tercsgo_huc01d3a403c050d47715d6aeed15b344f_839613_1920x1080_resize_q75_lanczos.jpg">
            </div>
            <div class="bloco" onclick="lol()">
                <img src="https://i.pinimg.com/originals/22/49/0d/22490db63367ba74ec73e9e913343f09.jpg">
            </div>
        </div>
        <div id="container-direita">
            <div id="texto">
                <h2> FORTNITE </h2>
                <h3> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</h3>
            </div>
            <div class="comprarcreditos">
                <a href= ../Produtos/ProdutosCsGo.php> COMPRAR CRÉDITOS </a>
            </div>
        </div>
        
        <img class="background" src="https://images.alphacoders.com/943/thumb-1920-943271.png">
    </section>

    <section id="lol">
        <div id="container-esquerda">
            <div class="bloco" onclick="fortnite()">
                <img src="https://wallpapercave.com/wp/wp5929022.png">
            </div>
            <div class="bloco" onclick="csgo()">
                <img src="https://dmarket.com/blog/best-csgo-wallpapers/tercsgo_huc01d3a403c050d47715d6aeed15b344f_839613_1920x1080_resize_q75_lanczos.jpg">
            </div>
            <div class="bloco" onclick="lol()">
                <img src="https://i.pinimg.com/originals/22/49/0d/22490db63367ba74ec73e9e913343f09.jpg">
            </div>
        </div>
        <div id="container-direita">
            <div id="texto">
                <h2> LEAGUE OF LEGENDS </h2>
                <h3> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</h3>
            </div>
            <div class="comprarcreditos">
                <a href= ../Produtos/ProdutosCsGo.php> COMPRAR CRÉDITOS </a>
            </div>
        </div>
        
        <img class="background" src="https://s1.1zoom.me/big7/156/League_of_Legends_Warriors_Akali_Rogue_Assassin_558507_1920x1080.jpg">
    </section>
    
</body>
</html>