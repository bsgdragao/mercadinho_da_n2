function visibleLoginFalse() {
    var idBtn = document.getElementById('myLogin');

    if (idBtn.style.visibility == 'visible') {
        idBtn.style.visibility = 'hidden';
    } else
        idBtn.style.visibility = 'visible'
}

function loginForm() {
    var done = 0;
    var idBtnLogin = document.getElementById('formProds');
    var idBtn = document.getElementById('myLogin');
    var username = document.getElementById('usernameL').value;
    username = username.toLowerCase();
    var password = document.getElementById('pswL').value;
    password = password.toLowerCase();
    if (username == "admin" && password == "123456") {
        idBtn.style.visibility = 'hidden';
        idBtnLogin.style.visibility = 'visible';
        done = 1;
    }
    if (done == 0) {
        alert("Senha ou Usuário inválido.");
    }
}

function validar_form_contato() {
    var nome = formcontato.nome.value;
    var preco = formcontato.preco.value;
    var quantidade = formcontato.quantidade.value;
    var dataatual = formcontato.dataatual.value;
    var validade = formcontato.validade.value;

    const diffTime = Math.abs(validade - dataatual);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    console.log(diffDays);

    var fotoproduto = formcontato.fotoproduto.value;
    var categoria = selectCat.categoria.value;


    if (nome == "") {
        alert("Campo nome é obrigatorio");
        formcontato.nome.focus();
        return false;
    }
    if (preco == "") {
        alert("Campo Preco é obrigatorio");
        formcontato.preco.focus();
        return false;
    }
    if (preco <= 0) {
        alert("preco valor inválido ");
        formcontato.preco.focus();
        return false;
    }
    if (quantidade == "" || quantidade <= 0) {
        alert("Campo Quantidade é obrigatorio");
        formcontato.quantidade.focus();
        return false;
    }
    if (dataatual == "") {
        alert("Campo Data Atual é obrigatorio");
        formcontato.dataatual.focus();
        return false;
    }
    if (validade == "") {
        alert("Campo Validade  do Produto é obrigatorio");
        formcontato.validade.focus();
        return false;
    }
    if (validade <= dataatual) {
        alert("Campo Informe uma Data Valida é obrigatorio");
        formcontato.validade.focus();
        return false;
    }
    if (diffDays <= 7) {
        alert("Produto vence em menos de 1 semana, não pode ser vendido!");
        formcontato.validade.focus();
        return false;
    }
    if (fotoproduto == "") {
        alert("Campo inserir Foto do Produto é obrigatorio");
        formcontato.fotoproduto.focus();
        return false;
    }
    if (categoria == "") {
        alert("Campo inserir Foto do Produto é obrigatorio");
        formcontato.fotoproduto.focus();
        return false;
    }
}

function alertSucess() {
    alert("Dados salvos com sucesso!");
}