function ejercicio2bucle(){
    let numero = prompt("Introduce un número para ver su tabla de multiplicar:");

numero = parseInt(numero);

if (!isNaN(numero)) {
    for (let i = 1; i <= 10; i++) {
        alert(`${numero} x ${i} = ${numero * i}`);
    }
} else {
    alert("Por favor, introduce un número válido.");
}
}

