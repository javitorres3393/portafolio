function ejercicio4semana1() {
    function imprimirArreglo() {
        let entrada = prompt("Introduce elementos separados por comas:");
        
        if (!entrada) {
            alert("No se ha introducido nada.");
            return;
        }
    
        let elementos = entrada.split(",").map(item => item.trim());
        elementos.forEach(elemento => console.log(elemento));
    }
    imprimirArreglo();

}

