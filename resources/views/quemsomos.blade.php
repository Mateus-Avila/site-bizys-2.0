@extends('layout')

<x-header></x-header>

<main>
    <div class="banner">
        <div class="banner__items">
            <div class="banner__items_texts">
                <h1 class="banner__title branco">Quem somos?</h1>
                <p class="banner__text branco">Descubra mais sobre o Bizys!</p>
            </div>
        </div>
        <img src="{{ asset('images/quemsomos.png')}}" alt="Imagem de venda pexels" class="banner__image">
    </div>
    <div class="section1">
        <img src="{{ asset('images/logo final editavel 3.png') }}" alt="bizys logo" class="section1__image">
        <div class="section1__texts">
            <p class="section1__text">Bizys foi criado para conectar e multiplicar negócios. Gerando novos clientes e multiplicando parcerias</p>
            <p class="section1__text">O Bizys traz uma solução de <strong>captação</strong>, <strong>capitalização</strong> e <strong>fidelização</strong> de clientes</p>
        </div>
    </div>
    <div class="section2">
        <img src="{{ asset('images/missao.svg') }}" alt="bizys missão" class="section2__image">
        <div class="section2__texts">
            <h2 class="section2__title">Nossa missão</h2>
            <p class="section2__text">Construir pontes que impulsionem o crescimento, promovam a inovação e fortaleçam relacionamentos lucrativos e duradouros</p>
        </div>
    </div>
    <div class="section1">
        <img src="{{ asset('images/visao.svg') }}" alt="bizys logo" class="section1__image">
        <div class="section1__texts">
            <h2 class="section1__title">Nossa visão</h2>
            <p class="section1__text">Ser a plataforma líder de conexões entre pessoas e empresas, reconhecida por nossa capacidade de gerar negócios, expandindo horizontes comerciais e promovendo a prosperidade econômica</p>
        </div>
    </div>
    <div class="section3">
        <h2 class="section3__title">Nossos valores:</h2>
                    <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper__slide_content">
                    <div class="swiper__texts">
                        <h3 class="swiper__texts_title">Integridade</h3>
                        <p class="swiper__texts_text">Agimos com ética e transparência em todas as nossas interações</p>
                    </div>
                    <img src="{{asset('images/integridade.svg')}}" alt="bizys deal" class="swiper__image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__slide_content">
                    <div class="swiper__texts">
                        <h3 class="swiper__texts_title">Inovação</h3>
                        <p class="swiper__texts_text">Buscamos constantemente maneiras criativas e tecnologicamente avançadas de aprimorar nossas plataformas e serviços</p>
                    </div>
                    <img src="{{asset('images/inovacao.svg')}}" alt="bizys shopping" class="swiper__image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__slide_content">
                    <div class="swiper__texts">
                        <h3 class="swiper__texts_title">Colaboração</h3>
                        <p class="swiper__texts_text">Acreditamos no poder da colaboração e da construção de parcerias sólidas entre pessoas e empresas para alcançar o sucesso mútuo</p>
                    </div>
                    <img src="{{asset('images/colaboracao.svg')}}" alt="bizys teaching" class="swiper__image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__slide_content">
                    <div class="swiper__texts">
                        <h3 class="swiper__texts_title">Empoderamento</h3>
                        <p class="swiper__texts_text">Capacitamos indivíduos e empresas a alcançar seu pleno potencial</p>
                    </div>
                    <img src="{{asset('images/Empoderamento.svg')}}" alt="bizys teaching" class="swiper__image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__slide_content">
                    <div class="swiper__texts">
                        <h3 class="swiper__texts_title">Crescimento Sustentável</h3>
                        <p class="swiper__texts_text">Buscamos um crescimento que seja equilibrado e sustentável, garantindo que nossas ações contribuam para um futuro próspero e duradouro</p>
                    </div>
                    <img src="{{asset('images/sustentavel.svg')}}" alt="bizys teaching" class="swiper__image">
                </div>
            </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="section1">
        <img src="{{ asset('images/money.svg') }}" alt="bizys investimento" class="section1__image">
        <div class="section1__texts">
            <h2 class="section1__title">O bizys poder ser uma fonte de renda extra ou seu principal negócio</h2>
            <p class="section1__text">Você desenvolve seu modelo de parcerias de acordo com seus objetivos e disponibilidade, no bizys você determina seu ritmo e limite</p>
        </div>
    </div>
</main>

<x-footer></x-footer>