function ejercicio7bucle() {
    function esPrimo(numero) {
        if (numero < 2) return false;
    
        for (let i = 2; i < numero; i++) {
            if (numero % i === 0) {
                return false;
            }
        }
        return true;
    }
    
    function mostrarPrimos(hasta) {
        alert(`Números primos hasta ${hasta}:`);
    
        for (let num = 2; num <= hasta; num++) {
            if (esPrimo(num)) {
                alert(num);
            }
        }
    }
    
    let numeroUsuario = parseInt(prompt("Introduce un número:"));
    if (!isNaN(numeroUsuario) && numeroUsuario > 0) {
        mostrarPrimos(numeroUsuario);
    } else {
        alert("Por favor, introduce un número válido.");
    }
    

}
