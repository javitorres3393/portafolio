function ejercicio31semana1() {
    function distancia(str1, str2) {
        let count = 0;
        for (let i = 0; i < str1.length; i++) {
            if (str1[i] !== str2[i]) count++;
        }
        return count;
    }
    let str31a = prompt("Introduce la primera cadena:");
    let str31b = prompt("Introduce la segunda cadena:");
    alert("Distancia entre las cadenas: " + distancia(str31a, str31b));
}   