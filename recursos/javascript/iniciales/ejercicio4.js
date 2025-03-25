let segundos = 0;
let intervalo = null;

function actualizarTiempo() {
    document.getElementById("tiempo").textContent = segundos;
}

function iniciarCronometro() {
    if (intervalo === null) {  // Solo inicia si no hay un intervalo en curso
        intervalo = setInterval(function() {
            segundos++;
            actualizarTiempo();
        }, 1000);
    }
}

function pausarCronometro() {
    clearInterval(intervalo);
    intervalo = null;
}

function reiniciarCronometro() {
    pausarCronometro();
    segundos = 0;
    actualizarTiempo();
    iniciarCronometro();
}

document.getElementById("iniciar").addEventListener("click", iniciarCronometro);
document.getElementById("pausar").addEventListener("click", pausarCronometro);
document.getElementById("reiniciar").addEventListener("click", reiniciarCronometro);
