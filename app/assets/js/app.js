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

// função para verificar e fazer login
async function login() {
    let email = document.querySelector('#email').value
    let senha = document.querySelector('#senha').value

    // alert(`${usuario} ${senha}`)
    if (email.trim() != '' && senha.trim() != '') {
        $('#loader').show()
        setTimeout(function() {
            window.location.href = './app/pages/index.php'
        }, 2000)
    } else {
        Swal.fire('Erro!', 'Email ou senha incorretos!', 'error')
    }
}


