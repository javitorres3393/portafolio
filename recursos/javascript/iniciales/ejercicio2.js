function ejercicio2() {
    const respuestas = ["Sí", "No", "Tal vez", "Inténtalo de nuevo", "Definitivamente", "No cuentes con ello"];
    const respuestaAleatoria = respuestas[Math.floor(Math.random() * respuestas.length)];
    document.getElementById("respuesta").textContent = respuestaAleatoria;
}