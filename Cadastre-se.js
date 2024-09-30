function OlhoAberto() {
  var inputPass = document.getElementById('senha')
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
  var inputPass = document.getElementById('Confirme-a-senha')
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

const form = document.getElementById('form');
const login = document.getElementById('Nome');
const spans = document.querySelectorAll('.span_required');
const email = document.getElementById('email');
const senha = document.getElementById('senha');
const confirmaSenha = document.getElementById('Confirme-a-senha');

function setError(element, index) {
  spans[index].style.display = 'block';
  element.classList.add('input-error');
}

function removeError(element, index) {
  spans[index].style.display = 'none';
  element.classList.remove('input-error');
}

function loginValidate() {
  if (login.value.length < 3) {
    setError(login, 0);
  } else {
    removeError(login, 0);
  }
}

function emailValidate() {
  const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
  if (!emailRegex.test(email.value)) {
    setError(email, 1);
  } else {
    removeError(email, 1);
  }
}

function senhaValidate() {
  if (senha.value.length < 6) {
    setError(senha, 2);
  } else {
    removeError(senha, 2);
  }

  if (senha.value !== confirmaSenha.value) {
    setError(confirmaSenha, 3);
  } else {
    removeError(confirmaSenha, 3);
  }
}


