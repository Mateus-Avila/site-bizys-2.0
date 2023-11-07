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
};