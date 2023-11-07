const afiliadoBt = document.querySelector("#radio-1");
const indicadorBt = document.querySelector("#radio-2");
const indicadoBt = document.querySelector("#radio-3");
const botoes = document.querySelectorAll("input[type=radio]");

const section1Title = document.querySelector("#section1Title");
const section1Image = document.querySelector("#section1Image");
const section2Image = document.querySelector("#section2Image");
const section2Title = document.querySelector("#section2Title");
const section3Image = document.querySelector("#section3Image");
const section3Title = document.querySelector("#section3Title");
const section4Title = document.querySelector('#section4Title');
const list1 = document.querySelector('#list_1');
const list2 = document.querySelector('#list_2');
const list3 = document.querySelector('#list_3');
const list4 = document.querySelector('#list_4');
const list5 = document.querySelector('#list_5');
const list6 = document.querySelector('#list_6');

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
            section1Image.setAttribute('src', `../images/percentual.svg`)

            section2Image.setAttribute('src', `../images/teams.svg`)
            section2Title.innerHTML = `
            Ampliar sua rede de contatos e negócios
            `

            section3Title.innerHTML = `
            Oferecer ganhos para seus parceiros e clientes
            `
            section3Image.setAttribute('src', `../images/transfer.svg`)

            section4Title.innerHTML = `
            O que um Afiliado faz?
            `

            list1.innerHTML = `
            Encontrar parceiros de negócios (empresas e pessoas)
            `
            list2.innerHTML = `
            Desenvolver as parcerias entre empresas e pessoas
            `
            list3.innerHTML = `
            Definir e implantar o modelo de parcerias acordado entre os parceiros
            `
            list4.innerHTML = `
            Capacitar os parceiros para o uso do sistema
            `
            list5.innerHTML = `
            Auxiliar os parceiros a configurarem as mensagens e pagamentos no sistema
            `
            list6.innerHTML = `
            Acompanhar os relatórios de pagamento entre os parceiros
            `

            break;

        case "indicador":
            section1Title.innerHTML = `
            Entregar benefícios a seus clientes
            `
            section1Image.setAttribute('src', `../images/purchase.svg`)

            section2Image.setAttribute('src', `../images/investment.svg`)
            section2Title.innerHTML = `
            Aumentar suas vendas através do vale-presente fornecido pelo indicado, através de seu cliente
            `

            section3Title.innerHTML = `
            Poder receber comissão para si mesmo ou sua equipe pela indicação realizada
            `
            section3Image.setAttribute('src', `../images/team_spirit.svg`)

            section4Title.innerHTML = `
            O que um Indicador faz?
            `

            list1.innerHTML = `
            Realizar parcerias com empresas parceiras
            `
            list2.innerHTML = `
            Indicar seus clientes para receber benefícios do indicado
            `
            list3.innerHTML = `
            Divulgar a parceria para seus clientes
            `
            list4.innerHTML = `
            Entregar benefícios para seus clientes
            `
            list5.innerHTML = `
            Explicar os benefícios para seus clientes
            `
            list6.innerHTML = `
            Definir a política comercial em conjunto com o indicado e afiliado
            `

            break;

        case "indicado":
            section1Title.innerHTML = `
            Receber novos clientes pela parceria <br> Aumentar base de clientes
            `
            section1Image.setAttribute('src', `../images/purchase.svg`)

            section2Image.setAttribute('src', `../images/social.svg`)
            section2Title.innerHTML = `
            Fidelização de novos clientes
            `

            section3Title.innerHTML = `
            Aumentar faturamento <br> Ampliar deu negócio
            `
            section3Image.setAttribute('src', `../images/investment.svg`)

            section4Title.innerHTML = `
            O que um Indicado faz?
            `

            list1.innerHTML = `
            Realizar parcerias com empresas indicadoras
            `
            list2.innerHTML = `
            Receber o cliente indicado com excelência
            `
            list3.innerHTML = `
            Prestar o serviço contatado na parceria com excelência
            `
            list4.innerHTML = `
            Enviar o cliente para o indicador com seu vale-presente
            `
            list5.innerHTML = `
            Realizar controle dos pagamentos dos vales-presentes e comissões
            `
            list6.innerHTML = `
            Efetivar pagamentos dos vales-presentes e comissões
            `

            break;

        default:
            break;
    }
};