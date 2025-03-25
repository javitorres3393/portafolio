function ejercicio19semana1() {
    function min(arr) {
        return Math.min(...arr);
    }
    let arr19 = JSON.parse(prompt("Introduce un arreglo de números:"));
    alert("Número mínimo: " + min(arr19));

}