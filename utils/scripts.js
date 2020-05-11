function visibleLoginFalse() {
    var idBtn = document.getElementById('myLogin');

    if (idBtn.style.visibility == 'visible') {
        idBtn.style.visibility = 'hidden';
    } else
        idBtn.style.visibility = 'visible'
}

function loginForm() {
    var adminButtons = document.getElementById('adminButtons');
    var idBtn = document.getElementById('myLogin');
    var username = document.getElementById('usernameL').value;
    username = username.toLowerCase();
    var password = document.getElementById('pswL').value;
    password = password.toLowerCase();
    if (username == "admin" && password == "123456") {
        idBtn.style.visibility = 'hidden';
        adminButtons.style.visibility = 'visible';
    } else {
        alert("Senha ou Usuário inválido.");
    }
}

function validaProductForm() {
    var preco = document.getElementById('preco').value;
    var quantidade = document.getElementById('quantidade').value;
    validade = document.getElementById('validade').value;
    var today = new Date(Date());
    var validade = new Date(document.getElementById("validade").value);
    var result = parseInt((validade - today) / (24 * 3600 * 1000));
    console.log(validade);

    if (preco <= 0) {
        alert("Informe um preço válido!");
        document.getElementById('preco').focus();
        return false;
    }
    if (quantidade <= 0) {
        alert("Campo Quantidade é obrigatorio!");
        document.getElementById('quantidade').focus();
        return false;
        done = 1;
    }
    if (result <= 7) {
        alert("Não é possível vender produtos que vão vencer a menos de 7 dias!");
        document.getElementById('validade').focus();
        return false;
    }

}

function alertSucess() {
    alert("Dados salvos com sucesso!");
}

function validaFuncForm() {
    var teste = 0;
    var cpf = document.getElementById('cpfFunc').value;
    nascimento = document.getElementById('nascimento').value;
    var today = new Date(Date());
    var nascimento = new Date(document.getElementById("nascimento").value);
    var result = parseInt((today - nascimento) / (24 * 3600 * 1000));
    if (cpf.length <= 10) {
        alert("CPF incorreto!");
        document.getElementById('cpfFunc').focus();
        return false;
    }
    if (result <= 6570) {
        alert("Não é possível cadastrar menores de 18 anos!" + result);
        document.getElementById('nascimento').focus();
        return false;
    }
}