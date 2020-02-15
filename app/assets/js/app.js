// Função typewriter 
document.querySelector('#botao')

function typeWriter(elemento) {
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