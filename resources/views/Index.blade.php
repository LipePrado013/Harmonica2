@extends('Layouts.main')

@section('nav')
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