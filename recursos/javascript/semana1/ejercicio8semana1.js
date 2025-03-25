function ejercicio8semana1() {
    let num1 = parseInt(prompt("Introduce el primer número: "));
    let num2 = parseInt(prompt("Introduce el segundo número: "));

    function sumarRango() {
        if (num1 > num2) {
            alert("El primer número debe ser menor o igual al segundo.");
            return;
        }

        let suma = 0;
        for (let i = num1; i <= num2; i++) {
            suma += i;
        }
        alert(`La suma de los números entre ${num1} a ${num2} es: ${suma}`);
    }

    sumarRango();
}
