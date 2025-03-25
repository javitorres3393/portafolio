function ejercicio4bucle() {
    let nombres = [];
    let nombre = "";

    while (nombre !== "salir") {
        nombre = prompt('Introduce un nombre (escribe "salir" cuando termines):');

        if (nombre !== "salir" && nombre !== null && nombre !== "") {
            nombres.push(nombre);
        }
    }

    alert(nombres);
}
