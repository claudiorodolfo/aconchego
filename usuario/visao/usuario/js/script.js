function autenticar() {
    //vê se ta tudo ok. Se estiver submeter o formulario
    $("#acao").val('autenticar');
    $("#form").submit();
}

function apagar(id) {
    var confirm = window.confirm("Deseja realmente apagar o registro?");

    if (confirm) {
        $("#acao").val('apagar');
        $("#id").val(id);
        $("#form").submit();
    }
}

function buscar(id) {
    $("#acao").val('buscar_detalhe');
    $("#id").val(id);
    $("#form").submit();
}

function atualizar(id) {
    $("#acao").val('buscar_atualizacao');
    $("#id").val(id);
    $("#form").submit();
}

function buscarTodos() {
    $("#acao").val('buscar_todos');
    $("#form").submit();
}