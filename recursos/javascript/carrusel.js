let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    
    // Ocultar todos los slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    slideIndex++;
    
    if (slideIndex > slides.length) {slideIndex = 1}       

    slides[slideIndex - 1].style.display = "block";  

    // Cambiar la imagen cada 3 segundos
    setTimeout(showSlides, 3000); 
}

// Iniciar el carrusel
showSlides();
