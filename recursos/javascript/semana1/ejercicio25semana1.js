function ejercicio25semana1() {
    function terminanConS(arr) {
        return arr.filter(palabra => palabra.toLowerCase().endsWith('s'));
    }
    let arr25 = prompt("Introduce palabras separadas por comas:").split(',');
    alert("Palabras que terminan en 's': " + terminanConS(arr25));
}   