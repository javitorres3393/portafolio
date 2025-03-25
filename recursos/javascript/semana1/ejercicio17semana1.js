function ejercicio17semana1(){
    function capitalizarFrase(str) {
        return str.split(' ').map(palabra => palabra.charAt(0).toUpperCase() + palabra.slice(1)).join(' ');
    }
    let frase17 = prompt("Introduce una frase:");
    alert("Frase capitalizada: " + capitalizarFrase(frase17));
}


