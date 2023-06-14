window.addEventListener("load", function () {
    var categoria = document.getElementsByName('categoria');
    cambiarVisibilidad(categoria[0].innerText);
});

function cambiarVisibilidad(nombreCat) {
    var servicios = document.getElementsByClassName('servicio');

    for (var i = 0; i < servicios.length; i++) {
        var categoria = servicios[i].getAttribute('data-categoria');

        if (nombreCat === 'Todos' || categoria === nombreCat) {
            servicios[i].style.display = "block";
        } else {
            servicios[i].style.display = "none";
        }
    }
}
