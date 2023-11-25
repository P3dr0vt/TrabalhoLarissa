$(document).ready(function() {
    $("#lancarProjetos").click(function(){
        controller("formlancarprojeto");
    })
    $('body').on('click', '#botao_lancarprojeto', function(){
        controller("lancamentoProjeto");
    })
})