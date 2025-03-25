function ejercicio18semana1() {
    function max(arr) {
        return Math.max(...arr);
    }
    let arr18 = JSON.parse(prompt("Introduce un arreglo de números:"));
    alert("Número máximo: " + max(arr18));

}