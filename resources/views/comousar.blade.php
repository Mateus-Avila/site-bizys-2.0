@extends('layout')

<x-header></x-header>
<main>
    <div class="comousar">
        <div class=" comousar1">
            <h1 class="comousar__title">Vídeo selecionado:</h1>
            <iframe class="comousar__video" src="https://www.youtube.com/embed/40CVicVGdpE?si=OxrT0bPszl7JZ6RZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="video_principal"></iframe>
        </div>
        <div class="comousar2">
            <h2 class="comousar2__title">Nossa galeria de tutoriais</h2>
            <div class=" comousar2__galeria">
                <button class=" comousar2__galeria_button" id="botao_como_funciona_o_bizys">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/Geral - Como funciona o Bizys.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_geral_login">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/Geral - Login.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_logout">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/Geral - Logout.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_alterar_dados_conta">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/Geral - Alterar dados da conta.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_gerar_cupom_link">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicador - gerar cupom link.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_gerar_cupom_manualmente">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicador - gerar cupom manualmente.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_validar_cupom">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicador - validar cupom.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_filtrar_cupons">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicador - filtar cupons.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_alterar_colaboradores">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicador - alterar colaboradores.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_validar_cupom">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - validar cupom.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_filtrar_cupom_indicado">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/Indicado - Filtrar cupons.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_aba_parceiros">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - aba parceiros.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_aba_colaboradores">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - aba colaboradores.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_aba_comissões">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - aba de comissões.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_aba_pagamentos">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - aba de pagamentos.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>

                <button class=" comousar2__galeria_button" id="botao_mensagens">
                    <img src="{{asset('images/Miniaturas tutoriais bizys/indicado - mensagens.png')}}" alt="Como o Bizys Funciona" class=" comousar2__galeria_image">
                </button>
            </div>
        </div>
        <a href="https://www.youtube.com/@Bizys-business-system" class="contato__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="4em" viewBox="0 0 576 512" class="contato__logo_youtube"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
            <p class="contato__text">Nosso canal</p>
        </a>
    </div>
</main>
<x-footer></x-footer>