@extends('Layouts.main')

@section('nav')
<div class="info-top">
    <div>
        <p>Telefone: (13) 3323-2532</p>
        <p>R. Dona Luiza Macuco, 110 - vila Matias</p>
        <p>Harmonicaautomação@Outlook.com</p>
    </div>
    <div>
        <a><button class="insta"><i class="fa-brands fa-square-instagram"></i></button></a>
        <a><button class="facebook"><i class="fa-brands fa-facebook"></i></button></a>
        <a><button class="youtube"><i class="fa-brands fa-youtube"></i></button></a>
    </div>

</div>
<div class='nav'>
    <div class='logo'>
        <img src='img/logo-ferdi.png' width='100%' />
    </div>

    <button class='menu' id="openMenuLateral">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class='navegacao '>
        <ul class='list-nav'>
            <li class='links-nav ativo'><a href='#'>HOME</a></li>
            <li class='links-nav'><a href='#'>SOBRE NÓS</a></li>
            <li class='links-nav'><a href='#'>PEÇAS</a></li>
            <li class='links-nav'><a href='#'>SERVIÇOS</a></li>
            <li class='links-nav'><a href='#'>CONTATO</a></li>
        </ul>
    </div>

</div>

<div class="menuHide" id="fundoMenuLateral"></div>

<div class=" menuHide" id="menuLateral">
    <button id="closeMenuLateral" class="btn-fechar">Fechar &times;</button>
    <li class='menu-links-nav ativo'><a href='#'>HOME</a></li>
    <li class='menu-links-nav'><a href='#'>SOBRE NÓS</a></li>
    <li class='menu-links-nav'><a href='#'>PEÇAS</a></li>
    <li class='menu-links-nav'><a href='#'>SERVIÇOS</a></li>
    <li class='menu-links-nav'><a href='#'>CONTATO</a></li>
</div>

@endsection

@section('conteudo')
<section class="cont1">

    <div class="back-slide">
        <img class="mySlides" src="img/porto.jpeg" width="100%">
        <img class="mySlides" src="img/maquinas-ferd.jpeg" width="100%">
        <img class="mySlides" src="img/maquinas1.png" width="100%">
    </div>
    <div class="titulo-cont1">
        <h1>Soluções em Reparo de <br>Módulos eletrônicos</h1>
        <p>A Harmônica oferece uma garantia de serviço </p>
        <a href="#"><button>SOLICITAR ORÇAMENTO</button></a>
    </div>

</section>
<section class="box-cards">

    <div class="Mycards"><i class="fa-solid fa-gears"></i>
        <p>A Harmônica oferece uma garantia de serviço confiável e abrangente aos seus clientes para determinados padrões de qualidade</p>
    </div>
    <div class="Mycards"><i class="fa-solid fa-screwdriver-wrench"></i>
        <p>A Harmônica oferece uma garantia de serviço confiável e abrangente aos seus clientes para determinados padrões de qualidade</p>
    </div>
    <div class="Mycards"><i class="fa-solid fa-microchip"></i>
        <p>A Harmônica oferece uma garantia de serviço confiável e abrangente aos seus clientes para determinados padrões de qualidade</p>
    </div>

</section>
<section class="cont2">

    <div class="box-img-cont2">
        <img src="img/porto.jpeg" width="100%">
    </div>

    <div class="box-text-cont2">
        <h1>MÓDULOS DE TODA LINHA REACH STARKER PELO BRASIL</h1>

        <p> A Harmônica oferece uma garantia de serviço confiável e abrangente aos seus clientes para determinados padrões de qualidade, confiabilidade e desempenho e ainda oferecemos uma garantia de 6 meses no reparo dos módulos/placas/joystick tendo suporte total para o cliente atendido.
        </p>
        <div class="box-btn-img-cont2">

            <div>
                <a href="#"><button>QUERO RECEBER</button></a>
            </div>

            <img src="img/trator-cont.png">
        </div>
    </div>
    <div class="balao"></div>
</section>

<section class="cont3">

    <div class="titulo-cont3">
        <h5>Como Trabalhamos</h5>
        <h1>ENTENDA NOSSO PROCESSO</h1>
    </div>
    <div class="box-card-cont3">
        <div class="Mycards-cont3"><i class="fa-solid fa-gears"></i>
            <p>Manutenção de Maquinas da Linha Reach staker</p>
        </div>
        <div class="Mycards-cont3"><i class="fa-solid fa-screwdriver-wrench"></i>
            <p>Reparo de Módulos eletrônicos</p>
        </div>
        <div class="Mycards-cont3"><i class="fa-solid fa-tag"></i></i>
            <p>Venda de Peças para as Maquinas Pesadas</p>
        </div>
    </div>

</section>

<section class="box-info">

    <div class="card-info">
        <p>Garantir o desenvolvimento de nossos clientes através das inovações e tecnologia dos nossos serviços. </p>
        <i class="fa-solid fa-eye"></i>
        <h1>VISÃO</h1>
    </div>
    <div class="card-info">
        <p>Oferecer aos nossos clientes e parceiros sempre a melhor solução possível em vendas de peças, conserto de módulos eletrônicos, placas eletrônicas e joysticks.</p>
        <i class="fa-solid fa-bullseye"></i>
        <h1>MISSÃO</h1>
    </div>
    <div class="card-info">
        <p>Agilidade,Persistência, Honestidade,Qualidade e Preço justo.</p>
        <i class="fa-solid fa-handshake"></i>
        <h1>VALORES</h1>
    </div>

</section>
<section class="cont4">

    <div class="box-video">
        <iframe src="https://www.youtube.com/embed/yxIpIldzSQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="box-img-txt">
        <h1>COMO TRABALHAMOS PARA SEU MÓDULO </h1>
        <div class="img-box-cont4"> 
            <img src="img/trator-amarelo.png">
        </div>
    </div>
</section>
<section class="cont5">

    <div class="fundo-cont5"></div>

</section>
@endsection