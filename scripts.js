function visibleLoginFalse() {
    var idBtn = document.getElementById('myLogin');

    if (idBtn.style.visibility == 'visible') {
        idBtn.style.visibility = 'hidden';
    } else
        idBtn.style.visibility = 'visible'
}

function loginForm() {
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