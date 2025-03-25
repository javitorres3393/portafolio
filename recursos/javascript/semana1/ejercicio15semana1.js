function ejercicio16semana1(){
    function transcribir(adn) {
        return adn.replace(/G/g, 'C').replace(/C/g, 'G').replace(/T/g, 'A').replace(/A/g, 'U');
    }
    let adn15 = prompt("Introduce la secuencia de ADN:").toUpperCase();
    alert("ARN transcrito: " + transcribir(adn15));
}