function ejercicio10semana1() {
    let num1 = parseInt(prompt("Introduce el primer numero: "));
    let num2 = parseInt(prompt("Introduce el segundo numero: "));

    function contarRango() {
        if (num1 >= num2) {
            alert("El primer numero tiene que ser menor que el segundo");
            return;
        }
    
        let rango = num2 - num1 - 1;
        alert(`El rango de números es: ${rango}`);
    }

    contarRango();
}
