@extends('layout')

<body>

    <x-header></x-header>

    <main>
        <div class="banner">
            <div class="banner__items">
                <div class="banner__items_texts">
                    <h1 class="banner__title">Sua empresa estagnou?</h1>
                    <p class="banner__text">Conheça os benefícios que vão fazer sua empresa decolar!</p>
                </div>
                <a href="/beneficios" class=" banner__button">Conhecer beneficios</a>
            </div>
            <img src="{{ asset('images/index.png')}}" alt="Imagem de venda pexels" class="banner__image">
        </div>
        <div class="section1">
            <img src="{{ asset('images/invest.svg') }}" alt="bizys investimento" class="section1__image">
            <div class="section1__texts">
                <h2 class="section1__title">Uma solução simples e poderosa para o crescimento de sua empresa.</h2>
                <p class="section1__text">O Bizys oferece uma solução poderosa, baseada na indicação de clientes entre empresas, trazendo um inovador sistema de recompensas, que facilita a capitação e fidelização de novos clientes.</p>
            </div>
        </div>
        <div class="section2">
            <img src="{{ asset('images/agreement.svg') }}" alt="bizys investimento" class="section2__image">
            <div class="section2__texts">
                <h2 class="section2__title">Os parceiros nos tornam grandes!</h2>
                <p class="section2__text">Com o Bizys, você desenvolve parcerias duradouras com outras empresas, a fim de aumentar sua base de clientes, faturamento e ticket médio, além de dar muitos benefícios à seus clientes!</p>
            </div>
        </div>
        <div class="section3">
            <h2 class="section3__title">Nossos membros:</h2>
                        <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper__slide_content">
                        <div class="swiper__texts">
                            <h3 class="swiper__texts_title">Parceiro Indicado</h3>
                            <p class="swiper__texts_text">Pessoa ou empresa que recebe um cliente indicado e proporciona para ele os benefícios oferecidos na parceria com o indicador</p>
                        </div>
                        <img src="{{asset('images/deal.svg')}}" alt="bizys deal" class="swiper__image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper__slide_content">
                        <div class="swiper__texts">
                            <h3 class="swiper__texts_title">Parceiro Indicador</h3>
                            <p class="swiper__texts_text">Pessoa ou empresa que indica o cliente para receber benefícios de outra empresa ou pessoa.</p>
                        </div>
                        <img src="{{asset('images/shopping.svg')}}" alt="bizys shopping" class="swiper__image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper__slide_content">
                        <div class="swiper__texts">
                            <h3 class="swiper__texts_title">Afiliado</h3>
                            <p class="swiper__texts_text">Pessoa ou empresa que desenvolve sua rede de parcerias (indicados e indicadores) que fomentam benefícios mútuos e para seus clientes.</p>
                        </div>
                        <img src="{{asset('images/teaching.svg')}}" alt="bizys teaching" class="swiper__image">
                    </div>
                </div>
                ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <a href="/beneficios" class="banner__button">Saber mais</a>
        </div>



    </main>

    <x-footer></x-footer>

</body>