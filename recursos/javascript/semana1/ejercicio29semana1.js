function ejercicio29semana1() {
    function numAsteriscos(arr) {
        return arr.filter(item => item === '*').length;
    }
    let arr29 = prompt("Introduce un arreglo con caracteres separados por comas:").split(',');
    alert("Número de asteriscos: " + numAsteriscos(arr29));
}   