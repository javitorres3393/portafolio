function ejercicio13semana1(){
    function removerCeros(arr) {
        return arr.filter(num => num !== 0);
    }
    
    let input = prompt("Ingresa una serie de números separados por comas");
    let numeros = input.split(",").map(Number);
    let resultado = removerCeros(numeros);
    
    alert(`Array sin ceros: ${resultado}`);
    
}

