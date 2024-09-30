function OlhoAberto() {
    var inputPass = document.getElementById('nova_senha_con')
    var btnShowPass = document.getElementById('bt-senha')

    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    } else {
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
}

function OlhoFechado() {
    var inputPass = document.getElementById('nova_senh')
    var OlhoFechado = document.getElementById('b-senha')

    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        OlhoFechado.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    } else {
        inputPass.setAttribute('type', 'password')
         OlhoFechado.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
}

function fadeIn() {
    document.body.style.opacity = 1;
}

//const form = document.getElementById('form');
//const spans = document.querySelectorAll('.span_required');
//const senha = document.getElementById('nova_senh');
//const confirmaSenha = document.getElementById('nova_senha_con');

//function setError(element, index) {
   // spans[index].style.display = 'block';
   // element.classList.add('input-error');
//}

// removeError(element, index) {
   // spans[index].style.display = 'none';
   // element.classList.remove('input-error');
//}

//function senhaValidate() {
    //if (senha.value.length < 6) {
   //     setError(senha, 2);
   // } else {
  //      removeError(senha, 2);
  //  }

  //  if (senha.value !== confirmaSenha.value) {
   //     setError(confirmaSenha, 3);
   // } else {
 //       removeError(confirmaSenha, 3);
  ////  }
//}