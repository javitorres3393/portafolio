function ejercicio27semana1() {
    function numerosAPalabras(arr) {
        const palabras = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"];
        return arr.map(num => palabras[num]);
    }
    let arr27 = JSON.parse(prompt("Introduce un arreglo de números del 0 al 9:"));
    alert("Números en palabras: " + numerosAPalabras(arr27).join(', '));
}   