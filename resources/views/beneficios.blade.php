@extends('layout')

<x-header></x-header>

<main>
    <div class="banner">
        <div class="banner__items">
            <div class="banner__items_texts">
                <h1 class="banner__title">Conheça seus benefícios</h1>
                <p class="banner__text">Conheça os benefícios que o Bizys oferece de acordo com sua empresa!</p>
            </div>
        </div>
        <img src="{{ asset('images/beneficios.png')}}" alt="Imagem de beneficios pexels" class="banner__image"> 
    </div>
    <div class="switch">
        <fieldset id="switch" class="radio">
            <input name="switch" id="afiliado" type="radio">
            <label for="on">Afiliado</label>
            <input name="switch" id="indicador" type="radio">
            <label for="off">Indicador</label>
            <input checked="" name="switch" id="indicado" type="radio">
            <label for="auto">Indicado</label>
        </fieldset>
    </div>
    <div class="beneficios1">
        <h2 class="section1__title" id="section1Title">Receber um percentual das parcerias abertas</h2>
        <img src="{{ asset('images/percentual.svg') }}" alt=" Bizys percentual" class="beneficios1__image" id="section1Image">
    </div>
    <div class="beneficios2">
        <img src="{{ asset('images/teams.svg') }}" alt="bizys teams" class="beneficios2__image" id="section2Image">
        <h2 class="section2__title" id="section2Title">Ampliar sua rede de contatos e negócios</h2>
    </div>
    <div class="beneficios1">
        <h2 class="section1__title" id="section3Title">Oferecer ganhos para seus parceiros e clientes</h2>
        <img src="{{ asset('images/transfer.svg') }}" alt=" Bizys transferencia" class="beneficios1__image" id="section3Image">
    </div>
    <div class="beneficios3">
        <h2 class="beneficios3__title">O que um Afiliado faz?</h2>
        <ul class="beneficios3__list">
            <li class="beneficios3__list_item">
                <h3 class="list__number">1</h3>
                <p class="list__text">Encontrar parceiros de negócios (empresas e pessoas)</p>
            </li>
            <li class="beneficios3__list_item">
                <h3 class="list__number">2</h3>
                <p class="list__text">Desenvolver as parcerias entre empresas e pessoas</p>
            </li>
            <li class="beneficios3__list_item">
                <h3 class="list__number">3</h3>
                <p class="list__text">Definir e implantar o modelo de parcerias acordado entre os parceiros</p>
            </li>
            <li class="beneficios3__list_item">
                <h3 class="list__number">4</h3>
                <p class="list__text">Capacitar os parceiros para o uso do sistema</p>
            </li>
            <li class="beneficios3__list_item">
                <h3 class="list__number">5</h3>
                <p class="list__text">Auxiliar os parceiros a configurarem as mensagens e pagamentos no sistema</p>
            </li>
            <li class="beneficios3__list_item">
                <h3 class="list__number">6</h3>
                <p class="list__text">Acompanhar os relatórios de pagamento entre os parceiros</p>
            </li>
        </ul>

    </div>
</main>

<x-footer></x-footer>