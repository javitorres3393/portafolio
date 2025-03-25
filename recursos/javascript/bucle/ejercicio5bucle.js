function ejercicio5bucle() {
    let palabra = prompt("Introduce una palabra:");
    let contador = 0;
    let vocales = "aeiouAEIOU";

    for (let i = 0; i < palabra.length; i++) {
        if (vocales.includes(palabra[i])) {
            contador++;
        }
    }

    alert(`La palabra "${palabra}" tiene ${contador} vocales.`);
}
    