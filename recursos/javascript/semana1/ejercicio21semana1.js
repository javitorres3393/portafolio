function ejercicio21semana1() {
    function pares(arr) {
        return arr.filter(num => num % 2 === 0);
    }
    let arr21 = JSON.parse(prompt("Introduce un arreglo de números:"));
    alert("Números pares: " + pares(arr21));
}   