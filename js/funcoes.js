function controller(action, id)
{
    switch(action)
    {
        case 'formlancarprojeto':
            formLancarProjeto();
        break;
        case 'lancamentoProjeto':
            lancamentoProjeto();
        break;
    }
    function formLancarProjeto()
{
  var form = "<form id='formprojeto' method='POST'>";
  form += "     <p>Título: <input class='w3-input w3-padding-16 w3-border' type='text' name='title'>";
  form += "     <p>Descrição: <input class='w3-input w3-padding-16 w3-border' type='text' name='descricao'>";
  form += "     <p><input id='botao_lancarprojeto' class='w3-button w3-light-grey' type='button' value='Cadastrar'>";
  form += "    </form>";
  $("#painel").html(form);
}
    function lancamentoProjeto(){
        $.post("lancaprojeto.php", $("#formprojeto").serialize(), function(data){
            alert(data);
        })
    }
}