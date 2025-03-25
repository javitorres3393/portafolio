function ejercicio14semana1() {
    function transcribir(adn) {
        let transcripcion = {
            'G': 'C',
            'C': 'G',
            'T': 'A',
            'A': 'U'
        };
    
        return adn.split('').map(nucleotido => transcripcion[nucleotido] || '').join('');
    }
    
    alert(transcribir("ACGT"));
    alert(transcribir("ACGTGGTCTTAA"));
    alert(transcribir(""));
    alert(transcribir("XYZ"));
    
}