function ejercicio9bucle() {
    let frase = prompt("Ingresa una frase:");
    
    if (frase) {
        let palabras = frase.split(" ");
        
        let cantidadPalabras = palabras.length;
        
        console.log("Cantidad de palabras:", cantidadPalabras);
        alert("La frase tiene " + cantidadPalabras + " palabras.");
    } else {
        alert("No ingresaste ninguna frase.");
    }
}
