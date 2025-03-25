function ejercicio6bucle() {
    let numeros = prompt("Introduce una lista de números separados por comas.");
    
    function sumar(numeros) {
        let arrayNumeros = numeros.split(",").map(Number); // Convertir en array de números
        let suma = 0;
        for (let i = 0; i < arrayNumeros.length; i++) {
            suma += arrayNumeros[i];
        }
        return suma;
    }
    
    alert("La suma de los números es: " + sumar(numeros));
}
