function ejercicio5semana1() {
    function likes(numero) {
        if (numero < 1000) {
            return numero.toString();
        } else if (numero < 1000000) {
            return Math.floor(numero / 1000) + "K";
        } else {
            return Math.floor(numero / 1000000) + "M";
        }
    }

    let numero = prompt("Introduce el número de likes:");
    alert(`Formato de likes: ${likes(Number(numero))}`);
}