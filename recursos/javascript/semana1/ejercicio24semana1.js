function ejercicio24semana1() {
    function empiezanConA(arr) {
        return arr.filter(palabra => palabra.toLowerCase().startsWith('a'));
    }
    let arr24 = prompt("Introduce palabras separadas por comas:").split(',');
    alert("Palabras que empiezan con 'a': " + empiezanConA(arr24));
}   