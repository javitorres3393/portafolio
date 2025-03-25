function ejercicio3() {
    let aleatorio = Math.floor(Math.random() * 100) + 1;
    let numero = null;

    while (numero !== aleatorio) {
        numero = prompt("Introduce un número:");

        if (numero === "") {
            alert("No se ha introducido ningún número. Saliendo...");
            break;
        }

        numero = Number(numero);

        if (isNaN(numero) || numero < 1 || numero > 100) {
            alert("Ingresa un número que se encuentre entre 1 y 100");
            continue;
        }
        
        if (numero < aleatorio) {
            alert(`El número aleatorio es más grande que ${numero}`);
        }
        else if (numero > aleatorio) {
            alert(`El número aleatorio es más pequeño que ${numero}`);
        }
        else {
            alert(`¡¡Enhorabuena!! El número secreto era ${aleatorio}.`);
        }
    }
}
