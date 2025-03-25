function ejercicio16semana1() {
    function capitalizar(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    let palabra = prompt("Introduce una palabra:");
    alert("Palabra capitalizada: " + capitalizar(palabra));
}
