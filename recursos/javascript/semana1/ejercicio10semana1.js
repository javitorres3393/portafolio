function ejercicio10semana1() {
    function contarCaracteres(frase, caracter) {
        let contador = 0;
        for (let letra of frase) {
            if (letra === caracter) {
                contador++;
            }
        }
        return contador;
    }
    
    let fraseUsuario = prompt("Introduce una frase:");
    if (fraseUsuario) {
        let caracterUsuario = prompt("¿Qué caracter contamos?");
        
        if (caracterUsuario && caracterUsuario.length === 1) {
            let cantidadCaracteres = contarCaracteres(fraseUsuario, caracterUsuario);
            alert(`La frase '${fraseUsuario}' tiene ${cantidadCaracteres} '${caracterUsuario}'.`);
        } else {
            alert("Debes ingresar un único carácter.");
        }
    } else {
        alert("No ingresaste ninguna frase.");
    }
}