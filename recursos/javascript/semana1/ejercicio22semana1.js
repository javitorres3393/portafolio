function ejercicio22semana1() {
    function posiciones(arr) {
        return arr.reduce((acc, num, index) => (num % 2 === 0 ? acc.concat(index) : acc), []);
    }
    let arr22 = JSON.parse(prompt("Introduce un arreglo de números:"));
    alert("Posiciones de números pares: " + posiciones(arr22));
}   