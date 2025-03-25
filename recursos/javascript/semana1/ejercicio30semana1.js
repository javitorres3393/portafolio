function ejercicio30semana1() {
    function numAsteriscosMatriz(matriz) {
        return matriz.flat().filter(item => item === '*').length;
    }
    let matriz30 = JSON.parse(prompt("Introduce una matriz con '*' en formato [['*', 'a'], ['*', 'b']]:"));
    alert("Número de asteriscos en la matriz: " + numAsteriscosMatriz(matriz30));
}   