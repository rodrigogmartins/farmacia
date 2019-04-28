const BOTAO = document.querySelector('#voltar');

BOTAO.addEventListener('click', function() {
    window.location.href = document.referrer;
});
