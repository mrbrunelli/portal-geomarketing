
// Função typewriter 
async function typeWriter(elemento) {
    setTimeout(() => {
        let display = document.querySelector('h1#bemvindo').style.display = 'block'
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
            setTimeout(() => elemento.innerHTML += letra, 70 * i)
        })
    }, 1250);
}
const titulo = document.querySelector('#bemvindo')
typeWriter(titulo)

// função para logar teclando enter
const enterLogin = document.querySelector('#senha')
enterLogin.addEventListener('keyup', function (e) {
    let tecla = e.which || e.keyCode
    if (tecla == 13) {
        login()
    }
})

// função para verificar e fazer login
async function login() {
    let email = document.querySelector('#email').value
    let senha = document.querySelector('#senha').value

    // alert(`${usuario} ${senha}`)
    if (email.trim() != '' && senha.trim() != '') {
        $('#loader').show()
        $.ajax({
            url: './backend/services.php?acao=login',
            type: 'post',
            async: true,
            data: {
                email,
                senha
            },
            success: function (result) {
                setTimeout(function () {
                    if (result == '1') {
                        window.location.href = './app/pages/'
                    } else {
                        Swal.fire('Erro!', 'Usuário não encontrado!', 'error')
                        $('#loader').hide()
                        console.log(result)
                    }
                }, 1000)
            }
        })
    } else {
        Swal.fire('Erro!', 'Email ou Senha incorretos!', 'error')
    }
}


