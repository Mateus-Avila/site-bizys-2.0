const afiliadoBt = document.querySelector("#afiliado");
const indicadorBt = document.querySelector("#indicador");
const indicadoBt = document.querySelector("#indicado");
const botoes = document.querySelectorAll("input[type=radio]")

const section1Title = document.querySelector("#section1Title");
const section1Image = document.querySelector("#section1Image");
const section2Image = document.querySelector("#section2Image");
const section2Title = document.querySelector("#section2Title");
const section3Image = document.querySelector("#section3Image");
const section3Title = document.querySelector("#section3Title");

afiliadoBt.addEventListener('click', () => {
    alterarContexto('afiliado');
    afiliadoBt.classList.add('active');
})

indicadorBt.addEventListener('click', () => {
    alterarContexto('indicador');
    indicadorBt.classList.add('active');
});

indicadoBt.addEventListener('click', () => {
    alterarContexto('indicado');
    indicadoBt.classList.add('active');
});

function alterarContexto(contexto) {
    botoes.forEach(function(contexto) {
        contexto.classList.remove('active');
    });
    switch (contexto) {
        case "afiliado":
            section1Title.innerHTML = `
            Receber um percentual das parcerias abertas
            `
            section1Image.setAttribute('src', `{{ asset('images/percentual.svg') }}`)

            section2Image.setAttribute('src', `{{ asset('images/teams.svg') }}`)
            section2Title.innerHTML = `
            Ampliar sua rede de contatos e negócios
            `

            section3Title.innerHTML = `
            Oferecer ganhos para seus parceiros e clientes
            `
            section3Image.setAttribute('src', `{{ asset('images/transfer.svg') }}`)

            break;

        case "indicador":
            section1Title.innerHTML = `
            Entregar benefícios a seus clientes
            `
            section1Image.setAttribute('src', `{{ asset('images/purchase.svg') }}`)

            section2Image.setAttribute('src', `{{ asset('images/investment.svg') }}`)
            section2Title.innerHTML = `
            Aumentar suas vendas através do vale-presente fornecido pelo indicado, através de seu cliente
            `

            section3Title.innerHTML = `
            Poder receber comissão para si mesmo ou sua equipe pela indicação realizada
            `
            section3Image.setAttribute('src', `{{ asset('images/team_spirit.svg') }}`)

            break;

        case "indicado":
            section1Title.innerHTML = `
            Receber novos clientes pela parceria <br> Aumentar base de clientes
            `
            section1Image.setAttribute('src', `{{ asset('images/purchase.svg') }}`)

            section2Image.setAttribute('src', `{{ asset('images/social.svg') }}`)
            section2Title.innerHTML = `
            Fidelização de novos clientes
            `

            section3Title.innerHTML = `
            Aumentar faturamento <br> Ampliar deu negócio
            `
            section3Image.setAttribute('src', `{{ asset('images/investment.svg') }}`)

            break;

        default:
            break;
    }
}






// como usar js





const comoFuncionaOBizys = document.querySelector('#botao_como_funciona_o_bizys')
const geralLogin = document.querySelector('#botao_geral_login')
const geralLogout = document.querySelector('#botao_logout')
const geralAlterarDadosConta = document.querySelector('#botao_alterar_dados_conta')
const indicadorGerarCupomLink = document.querySelector('#botao_gerar_cupom_link')
const indicadorGerarCupomManual = document.querySelector('#botao_gerar_cupom_manualmente')
const indicadorValidarCupom = document.querySelector('#botao_validar_cupom')
const indicadorFiltrarCupons = document.querySelector('#botao_filtrar_cupons')
const indicadorAlterarColaboradores = document.querySelector('#botao_alterar_colaboradores')
const indicadoValidarCupom = document.querySelector('#botao_validar_cupom')
const indicadoFiltrarCupons = document.querySelector('#botao_filtrar_cupom_indicado')
const indicadoAbaColaboradores = document.querySelector('#botao_aba_colaboradores')
const indicadoAbaComissões = document.querySelector('#botao_aba_comissões')
const indicadoAbaPagamentos = document.querySelector('#botao_aba_pagamentos')
const indicadoMensagens = document.querySelector('#botao_mensagens')
const indicadoAbaParceiros = document.querySelector('#botao_aba_parceiros')

   
   
   
function changeVideoSrc(videoId) {
    const videoIframe = document.getElementById('video_principal');
    videoIframe.toggleAttribute('src', 'https://www.youtube.com/embed/' + videoId);

    window.scrollTo({
        top: 230,
        behavior: 'smooth' // Adiciona uma animação suave à rolagem
    });
}



// Eventos de clique dos botões

comoFuncionaOBizys.addEventListener('click', function() {
    changeVideoSrc('WtwVDAwWrh0?si=MvE7rbWIz5UNYSLN?si=OxrT0bPszl7JZ6RZ');
});

geralLogin.addEventListener('click', function() {
    changeVideoSrc('40CVicVGdpE?si=T47rvpWmWlMY5ZVP');
});

geralLogout.addEventListener('click', function() {
    changeVideoSrc('ac29d3nC-oc?si=ePo2mpDCMiypUMj-');
});

geralAlterarDadosConta.addEventListener('click', function() {
    changeVideoSrc('VfBYBy_ObTg?si=_sMgZpbiF00K_LDH');
});

indicadorGerarCupomLink.addEventListener('click', function() {
    changeVideoSrc('g9zcCR01xRY?si=blIbvGxKKe7J4cBO');
});

indicadorGerarCupomManual.addEventListener('click', function() {
    changeVideoSrc('ac29d3nC-oc?si=ePo2mpDCMiypUMj-');
});

indicadorValidarCupom.addEventListener('click', function() {
    changeVideoSrc('ac29d3nC-oc?si=ePo2mpDCMiypUMj-');
});

indicadorFiltrarCupons.addEventListener('click', function() {
    changeVideoSrc('4UD9MaKuAAc?si=yeULJb5clnllTxKm');
});

indicadorAlterarColaboradores.addEventListener('click', function() {
    changeVideoSrc('EFmH2USXRGI?si=ooy0xTnID61MrvHA');
});

indicadoValidarCupom.addEventListener('click', function() {
    changeVideoSrc('NTiX3NCiK9Q?si=itiyRovvVGz0sk2j');
});

indicadoFiltrarCupons.addEventListener('click', function() {
    changeVideoSrc('QIT6pDfK2ZE?si=EMG0QKCLX5sZCyMw');
});

indicadoAbaColaboradores.addEventListener('click', function() {
    changeVideoSrc('y5-OrullgPE?si=S49CVbgT-Zy8hXee');
});

indicadoAbaComissões.addEventListener('click', function() {
    changeVideoSrc('ASJQta7VAFQ?si=O8qOScPfw7wEcNTb');
});

indicadoAbaPagamentos.addEventListener('click', function() {
    changeVideoSrc('QRH_m2xGYo0?si=dBFAmckwmwm5f3Dc');
});

indicadoMensagens.addEventListener('click', function() {
    changeVideoSrc('rXsJzcKDA00?si=iPUaOakKpUtRXZUH');
});

indicadoAbaParceiros.addEventListener('click', function() {
    changeVideoSrc('WhlzdE52OSI?si=Iot_cToNkDkZqP_J');
});



