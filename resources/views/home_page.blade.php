<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="cdn/fonticon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link type="text/css" href="/cdn/boot.css" rel="stylesheet">
    <link type="text/css" href="/cdn/style.css" rel="stylesheet">
    <title>KiSabor</title>
</head>

<body>
    <header class="main_header">
        <div class="main_header_content">
            <a class="logo" href="#">
                <img src="img/logo.png"
                    title="Bem Vindo ao projeto prático HTML5 e CSS3 Essentials"
                    alt="Bem Vindo ao projeto prático HTML5 e CSS3 Essentials">
            </a>
            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#lanche">Lanches</a></li>
                    <li><a href="#sanduicheria">Sanduicheria</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main_cta"
            style="background-image: url('img/bg_img_sanduiche.png');">
            <section class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Na KISabor, cada mordida é uma experiência
                            inesquecível!</h1>
                    </header>
                    <p>Veja nosso cardápio e venha se deliciar</p>
                    {{-- <p><a class="btn" href="#saiba-mais">Baixe aqui</a></p> --}}
                </div>
            </section>
        </div>

        <section class="main_blog">
            <header class="main_blog_header">
                <h1>Nossos Lanches</h1>
                <p>Aqui você encontra os melhores lanches e bebidas para se
                    deliciar.</p>
            </header>
            <article>
                <a href="#artigo1"><img src="img/post.jpg" title="Bauru"
                        alt="Bauru"></a>
                <p><a class="category" href="#">Bauru</a></p>
                <h2><a class="title" href="#">
                        Pão, Presunto, Queijo e Tomate.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo2"><img src="img/post.jpg" title="Simples"
                        alt="Simples"></a>
                <p><a class="category" href="#">Simples</a></p>
                <h2><a class="title" href="#">
                        Pão, Hambúrguer, Ovo, Queijo e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo3"><img src="img/post.jpg" title="Vegetariano"
                        alt="Vegetariano"></a>
                <p><a class="category" href="#">Vegetariano</a></p>
                <h2><a class="title" href="#">
                        Pão, 2 Ovos, Queijo, Alface, Tomate e Milho e Batata
                        Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo4"><img src="img/burguer.jpg" title="X-Burguer"
                        alt="X-Burguer"></a>
                <p><a class="category">X-Burguer</a></p>
                <h2><a class="title">
                        Pão, Queijo, Presunto, Hambúrguer, Batata Palha
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo5"><img src="img/post.jpg" title="X-Salada"
                        alt="X-Salada"></a>
                <p><a class="category" href="#">X-Salada</a></p>
                <h2><a class="title" href="#">
                        Pão, Queijo, Hambúrguer, Ovo, Alface, Tomate, Milho e
                        Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo6"><img src="img/salada_frango.jpg"
                        title="X-Salada Frango" alt="X-Salada Frango"></a>
                <p><a class="category" href="#">X-Salada Frango</a></p>
                <h2><a class="title" href="#">
                        Pão, Hambúrguer de Frango, Ovo, Queijo, Alface, Tomate,
                        Milho e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo7"><img src="img/post.jpg" title="X-Lolô"
                        alt="X-Lolô"></a>
                <p><a class="category" href="#">X-Lolô</a></p>
                <h2><a class="title" href="#">
                        Pão, Hámburguer, Queijo, Salsicha, Alface, Tomate, Milho
                        e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo8"><img src="img/post.jpg" title="X-Bacana"
                        alt="X-Bacana"></a>
                <p><a class="category" href="#">X-Bacana</a></p>
                <h2><a class="title" href="#">
                        Pão, Hámburguer, Presunto, Queijo, Alface, Tomate,
                        Batata Palha e Abacaxi.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo9"><img src="img/bacon.jpg" title="X-Bacon"
                        alt="X-Bacon"></a>
                <p><a class="category" href="#">X-Bacon</a></p>
                <h2><a class="title" href="#">
                        Pão, Hámburguer, Bacon, Queijo, Ovo, Alface, Tomate,
                        Milho e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo9"><img src="img/post.jpg"
                        title="X-Bacon Frango" alt="X-Bacon Frango"></a>
                <p><a class="category" href="#">X-Bacon Frango</a></p>
                <h2><a class="title" href="#">
                        Pão, Hámburguer de Frango, Bacon, Queijo, Ovo, Alface,
                        Tomate, Milho e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo10"><img src="img/carnivoro.jpg"
                        title="Carnívoro" alt="Carnívoro"></a>
                <p><a class="category" href="#">Carnívoro</a></p>
                <h2><a class="title" href="#">
                        Pão, Hámburguer, Bacon, Presunto, Salsicha, Queijo, Ovo,
                        Batata Palha.
                    </a>
                </h2>
            </article>
            {{-- <article>
                <a href="#artigo11"><img src="img/post.jpg"
                        title="Frango Especial" alt="Frango Especial"></a>
                <p><a class="category" href="#">Frango Especial</a></p>
                Pão, Hambúrguer de Frango, Presunto, Salsicha, Bacon, Ovo,
                Tomate, Alface, Milho e Batata Palha.
                </a>
                </h2>
            </article> --}}
            <article>
                <a href="#artigo12"><img src="img/duplo.jpg"
                        title="X-Duplo"
                        alt="X-Duplo"></a>
                <p><a class="category" href="#">X-Duplo</a></p>
                <h2><a class="title" href="#">
                    Pão, 2 Hambúrgueres, 2 Ovos, Presunto, Alface, Tomate, Milho e Batata Palha.
                    </a>
                </h2>
            </article>
            <article>
                <a href="#artigo13"><img src="img/duplo.jpg"
                        title="X-Tudo"
                        alt="X-Tudo"></a>
                <p><a class="category" href="#">X-Tudo</a></p>
                <h2><a class="title" href="#">
                    Pão, Hambúrguer, Salsicha, Ovo, Presunto, Bacon, Queijo, Alface, Tomate, Milho, Abacaxi e Batata Palha.
                    </a>
                </h2>
            </article>
        </section>
        <section class="main_course">
            <div class="main_course_fullwidth">
                <div class="main_course_rating_content">
                    <article class="main_course_rating_title">
                        <header>
                            <h2>Sanduicheria 5 estrelas, consolidada na região
                            </h2>
                        </header>
                        <img src="img/star.png" title="Sanduicheria KiSabor"
                            alt="Sanduicheria KiSabor">
                        <img src="img/star.png" title="Sanduicheria KiSabor"
                            alt="Sanduicheria KiSabor">
                        <img src="img/star.png" title="Sanduicheria KiSabor"
                            alt="Sanduicheria KiSabor">
                        <img src="img/star.png" title="Sanduicheria KiSabor"
                            alt="Sanduicheria KiSabor">
                        <img src="img/star.png" title="Sanduicheria KiSabor"
                            alt="Sanduicheria KiSabor">
                    </article>

                    <section class="main_course_rating_content_comment">
                        <header>
                            <h2>Veja as vantagens de comprar conosco</h2>
                        </header>
                        <article>
                            <header>
                                <h3>Entrega rápida</h3>
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                            </header>
                            <p>A nossa equipe trabalha para sempre entregar seu
                                lanche perfeito e de maneira rápida, peça quando
                                quiser com a certeza de rapidez e eficiência.
                            </p>
                        </article>
                        <article>
                            <header>
                                <h3>Atendimento</h3>
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                            </header>
                            <p>Prezamos sempre por um atendimento rápido e
                                eficaz, ligue ou entre em contato pelo WhatsApp,
                                você será muito bem atendido.</p>
                        </article>
                        <article>
                            <header>
                                <h3>Nossos lanches</h3>
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                            </header>
                            <p>Não podemos deixar de citar nossos lanches,
                                feitos com carinho e dedicação, com os melhores
                                ingredientes para que sua refeição seja uma
                                experiência indescritível.</p>
                        </article>
                        <article>
                            <header>
                                <h3>Bebidas</h3>
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                                <img src="img/star.png"
                                    title="Sanduicheria KiSabor"
                                    alt="Sanduicheria KiSabor">
                            </header>
                            <p>Aqui você encontra as mais variadas bebidas,
                                geladinhas para degustar.</p>
                        </article>
                    </section>
                </div>
            </div>
        </section>
        <div class="main_school">
            <section class="main_school_content">
                <header class="main_school_header">
                    <h1>Bem vindo a KiSabor</h1>
                    <p>A sua melhor escolha em sanduicheria</p>
                </header>
                <div class="main_school_content_left">
                    <article class="main_school_content_left_content">
                        <header>
                            <p>
                                <span class="icon-facebook"><a
                                        href="#facebook">Facebook</a></span>
                                <span class="icon-google-plus2"><a
                                        href="#google+">Google+</a></span>
                                <span class="icon-twitter"><a
                                        href="#twitter">Twitter</a></span>
                            </p>
                            <h2>Aqui você encontra o melhor sanduíche, bebida e
                                atendimento em um só lugar</h2>
                        </header>
                        <p>Desde 2010 a KiSabor trabalha para te entregar a
                            melhor experiência em lanches, atendimento e
                            entregas e muito mais ... </p>
                        <p>Que tal estudar, se deliciar com nossos lancher e ter
                            a entrega mais rápida da região? Venha para a
                            KiSabor!</p>
                        </p>
                    </article>
                    <section class="main_school_list">
                        <header>
                            <h2>Confira os nossos destaques</h2>
                        </header>
                        <article>
                            <header>
                                <h3 class="icon-trophy">Qualidade e Excelência
                                </h3>
                            </header>
                        </article>
                        <article>
                            <header>
                                <h3 class="icon-trophy">Qualidade e Atendimento
                                </h3>
                            </header>
                        </article>
                        <article>
                            <header>
                                <h3 class="icon-trophy">Entrega rápida</h3>
                            </header>
                        </article>
                        <article>
                            <header>
                                <h3 class="icon-trophy">Bebidas variadas e
                                    geladas</h3>
                            </header>
                        </article>
                    </section>
                </div>
                <div class="main_school_content_right">
                    <img src="img/bg_img_sanduiche.png"
                        title="UpInside Treinamentos"
                        alt="UpInside Treinamentos">
                </div>
                <article class="main_school_address">
                    <header>
                        <h2 class="icon-map2">Nos encontre</h2>
                    </header>
                    <p>Rua João Namen Curã, 9 - Vila Seac - Ipameri/GO -
                        +55 64 99229-2132</p>
                </article>
            </section>
        </div>
        <section class="main_tutor">
            <div class="main_tutor_content">
                <header class="main_tutor_header">
                    <h1>Conheça o Ruber, seu chapeiro dedicado</h1>
                    <p>Eu vou te proporcionar o melhor lanche!</p>
                </header>
                <div class="main_tutor_content_img"><img src="img/ruber.png"
                        title="Imagem do Ruber" alt="Imagem do Ruber"></div>
                <article class="main_tutor_history">
                    <header>
                        <h2>Com mais de 10 anos no ramo</h2>
                    </header>
                    <p>Como muitos, comecei no ramo em busca de uma oportunidade
                        de trabalho, e hoje, com mais de 10 anos de experiência,
                        posso dizer que sou um chapeiro dedicado e apaixonado
                        pelo que faço.
                    </p>
                </article>
                <section class="main_tutor_social_network">
                    <header>
                        <h2>Me siga no Instagram</h2>
                    </header>
                    <article>
                        <header>
                            <h3><a class="icon-instagram"
                                    href="https://www.instagram.com/ruberrodriguesdo/"
                                    target="_blank">Meu Instagram</a></h3>
                        </header>
                    </article>
                </section>
            </div>
        </section>
    </main>
    <section class="main_optin_footer">
        <div class="main_optin_footer_content">
            <header>
                <h1>Quer ver nosso cardápio completo? :)</h1>
            </header>
            <article>
                <header>
                    <h2><a class="btn" href="docs/cardapio_sabor.pdf"
                            target="_blank">Nosso Cardápio</a></h2>
                </header>
            </article>
        </div>
    </section>
    <section class="main_footer">
        <header>
            <h1>Quer saber mais?</h1>
        </header>
        <article class="main_footer_our_pages">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#escola">A Escola</a></li>
                <li><a href="#contato">Contado</a></li>
            </ul>
        </article>
        <article class="main_footer_links">
            <header>
                <h2>Links úteis</h2>
            </header>
            <ul>
                <li><a href="#privacidade">Política de Privacidade</a></li>
                <li><a href="#aviso">Aviso Legal</a></li>
                <li><a href="#termos">Termos de Uso</a></li>
            </ul>
        </article>
        <article class="main_footer_about">
            <header>
                <h2>Sobre o projeto</h2>
            </header>
            <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus
                projetos e entregar páginas que estejam dentro
                dos padrões da WEB seguindo as boas práticas!</p>
        </article>
    </section>
    <footer class="main_footer_rights">
        <p>Todos os Direitos Reservados a UpInside Treinamentos ®</p>
    </footer>
</body>

</html>
