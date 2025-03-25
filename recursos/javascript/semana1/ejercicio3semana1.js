function ejercicio3semana1() {
    let peso = prompt("Introduce tu peso: ")
    let altura = prompt("Introduce tu altura: ")
    let BMI = peso / (altura * altura)
    
    if (BMI < 18.5) {
        alert("Bajo de peso")
    } else if (BMI >= 18.5 && BMI < 25) {
        alert("Normal")
    } else if (BMI >= 25 && BMI < 30) {
        alert("Sobrepeso")
    } else {
        alert("Obeso")
    }
}
