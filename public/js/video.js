const comoFuncionaOBizys = document.querySelector('#botao_como_funciona_o_bizys');
const geralLogin = document.querySelector('#botao_geral_login');
const geralLogout = document.querySelector('#botao_logout');
const geralAlterarDadosConta = document.querySelector('#botao_alterar_dados_conta');
const indicadorGerarCupomLink = document.querySelector('#botao_gerar_cupom_link');
const indicadorGerarCupomManual = document.querySelector('#botao_gerar_cupom_manualmente');
const indicadorValidarCupom = document.querySelector('#botao_indicador_validar_cupom');
const indicadorFiltrarCupons = document.querySelector('#botao_filtrar_cupons');
const indicadorAlterarColaboradores = document.querySelector('#botao_alterar_colaboradores');
const indicadoValidarCupom = document.querySelector('#botao_indicado_validar_cupom');
const indicadoFiltrarCupons = document.querySelector('#botao_filtrar_cupom_indicado');
const indicadoAbaColaboradores = document.querySelector('#botao_aba_colaboradores');
const indicadoAbaComissões = document.querySelector('#botao_aba_comissões');
const indicadoAbaPagamentos = document.querySelector('#botao_aba_pagamentos');
const indicadoMensagens = document.querySelector('#botao_mensagens');
const indicadoAbaParceiros = document.querySelector('#botao_aba_parceiros');

   
   
   
function changeVideoSrc(videoId) {
    const videoIframe = document.getElementById('video_principal');
    videoIframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId);

    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Adiciona uma animação suave à rolagem
    });
};



// Eventos de clique dos botões

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
    changeVideoSrc('rbFePcdtj54?si=DkbD7IUbL0xxx3EC');
});

indicadorValidarCupom.addEventListener('click', function() {
    changeVideoSrc('Sg9kOxyLzT4?si=75t2tq7hYRSUe0G4');
});

indicadorFiltrarCupons.addEventListener('click', function() {
    changeVideoSrc('4UD9MaKuAAc?si=yeULJb5clnllTxKm');
});

indicadorAlterarColaboradores.addEventListener('click', function() {
    changeVideoSrc('EFmH2USXRGI?si=ooy0xTnID61MrvHA');
});

indicadoValidarCupom.addEventListener('click', function() {
    changeVideoSrc('NTiX3NCiK9Q?si=nR_1Bjbz93_itdOH');
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



