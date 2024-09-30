
function OlhoAberto() {
    var inputPass = document.getElementById('senha1')
    var btnShowPass = document.getElementById('icone')

    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    } else {
        inputPass.setAttribute('type', 'password')
         btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
}


function fadeIn() {
    document.body.style.opacity = 1;
}


