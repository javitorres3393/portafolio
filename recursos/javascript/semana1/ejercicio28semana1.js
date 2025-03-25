function ejercicio28semana1() {
    function palabrasANumeros(arr) {
        const mapa = {"cero": 0, "uno": 1, "dos": 2, "tres": 3, "cuatro": 4, "cinco": 5, "seis": 6, "siete": 7, "ocho": 8, "nueve": 9};
        return arr.map(palabra => mapa[palabra.toLowerCase()] ?? -1);
    }
    let arr28 = prompt("Introduce palabras separadas por comas (cero-nueve):").split(',');
    alert("Palabras a números: " + palabrasANumeros(arr28).join(', '));
}   