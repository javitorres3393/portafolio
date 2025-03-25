function ejercicio2semana1() {
    let edad = prompt("Introduce una edad: ");
    let ingresos = prompt("Introduce un ingreso: ");

    edad = Number(edad);
    ingresos = Number(ingresos);

    if (edad >= 18 && ingresos >= 1000) {
        alert(`Debes ${ingresos * 0.40}`);
        return ingresos * 0.40;
    } else {
        alert("No debes nada");
        return 0;
    }
}
