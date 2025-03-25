function ejercicio23semana1() {
    function duplicar(arr) {
        return arr.map(num => num * 2);
    }
    let arr23 = JSON.parse(prompt("Introduce un arreglo de números:"));
    alert("Arreglo duplicado: " + duplicar(arr23));
}   