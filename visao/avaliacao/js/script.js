function buscarPorAluno() {
    $("#acao").val('buscar_por_aluno');
    $("#form").submit();
}

//function buscarTodos() {
//    $("#acao").val('buscar_todos');
//    $("#form").submit();
//}

function buscarAvaliacaoAluno(exame, papel) {
    $("#acao").val('buscar_avaliacao_aluno');
    $("#exame").val(exame);
    $("#papel").val(papel);    
    $("#form").submit();
}