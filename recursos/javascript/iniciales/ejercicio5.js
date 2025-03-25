    function ejercicio5() {
        const sonidos = {
            "a": "./recursos/sonidos/note1.mp3",
            "s": "./recursos/sonidos/note2.mp3",
            "d": "./recursos/sonidos/note3.mp3",
            "f": "./recursos/sonidos/note4.mp3"
        };

        document.addEventListener("keydown", function(event) {
            let tecla = event.key.toLowerCase();
            if (sonidos[tecla]) {
                reproducirSonido(tecla);
                animarTecla(tecla);
            }
        });

        function reproducirSonido(tecla) {
            let audio = new Audio(sonidos[tecla]);
            audio.play().catch(error => console.error("Error al reproducir sonido:", error));
        }

        function animarTecla(tecla) {
            let elemento = document.getElementById(`tecla${tecla.toUpperCase()}`);
            if (elemento) {
                elemento.classList.add("pulsada");
                setTimeout(() => elemento.classList.remove("pulsada"), 200);
            }
        }
    }

    ejercicio5();
