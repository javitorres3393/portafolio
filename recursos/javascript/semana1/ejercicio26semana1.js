function ejercicio26semana1() {
    function imprimirMatriz(matriz) {
        alert(matriz.flat().join('\n'));
    }
    let matriz26 = JSON.parse(prompt("Introduce una matriz en formato [[1,2],[3,4]]:"));
    imprimirMatriz(matriz26);
}   