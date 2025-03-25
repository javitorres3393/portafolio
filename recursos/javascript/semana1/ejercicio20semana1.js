function ejercicio20semana1() {
    function password(str) {
        return str.toLowerCase().replace(/\s/g, '').replace(/a/g, '4').replace(/e/g, '3').replace(/i/g, '1').replace(/o/g, '0');
    }
    let str20 = prompt("Introduce una palabra o frase para convertir en contraseña:");
    alert("Contraseña generada: " + password(str20));
}