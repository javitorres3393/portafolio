function ejercicio8bucle() {
    let palabra = prompt("Ingresa una palabra:");
    
    if (palabra) {
        let palabraInvertida = "";
        
        for (let i = palabra.length - 1; i >= 0; i--) {
            palabraInvertida += palabra[i];
        }
        
        console.log("Palabra invertida:", palabraInvertida);
        alert("Palabra invertida: " + palabraInvertida);
    } else {
        alert("No ingresaste ninguna palabra.");
    }
}
