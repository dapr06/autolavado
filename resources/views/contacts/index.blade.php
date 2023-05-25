<x-menu/>
<html>
<body>
    <div class="container">
        <br><h1 class="text-center">¡¡No dudes en contactar!!</h1><br>
        <div class="row">
            <div class="col-md-4">
                <div id="wrapper">
                    <h2>¿Necesitas ayuda?</h2>
                    <form action="https://formsubmit.co/c0d833133b9e0f549c6e219ee17ce5f1 " method="POST" >
                        <label for="Nombre"> Nombre: </label>
                        <input type="text" name="name">

                        <label for="email"> Correo Electronico: </label>
                        <input type="email" name="email">

                        <label for="subject"> Asunto: </label>
                        <input type="text" name="subject">

                        <label for="comments"> Comentarios: </label>
                        <textarea name="comments" cols="15" rows="5"></textarea>

                        <input type="submit" value="Enviar">

                        <input type="hidden" name="_next" value="http://localhost">
                        <input type="hidden" name="_captcha" value="false">
                    </form>
                </div>
            </div>
            {{--Mapa--}}
            <div class="col-md-8">
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.486168156319!2d-3.7039360235453307!3d40.30936656216627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4221185bb0a9eb%3A0x535efb200ec44afe!2sPetroprix!5e0!3m2!1ses!2ses!4v1685027014146!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <i>C. Herreros, Nº1, 28906 Getafe, Madrid </i>
            </div>
        </div>
                <!--Politicas de empresa-->
        <p></p>
                <br><h3>Políticas de empresa.</h3><br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Calidad y satisfacción</h4>
                                <p class="card-text text-justify">Nos comprometemos a brindar servicios de la más alta
                                    calidad para garantizar la plena satisfacción de nuestros clientes. Nos esforzamos
                                    por superar sus expectativas en cada interacción y mantener una comunicación abierta
                                    para garantizar su satisfacción continua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsabilidad medioambiental</h4>
                                <p class="card-text text-justify">Somos conscientes de la importancia de proteger el medio ambiente.
                                    Por ello, nos comprometemos a utilizar productos y prácticas de limpieza sostenibles,
                                    minimizando nuestro impacto ambiental y promoviendo la conservación de los recursos
                                    naturales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Honestidad e integridad</h4>
                                <p class="card-text text-justify">Valoramos la honestidad y la integridad en todas nuestras operaciones.
                                    Mantenemos altos estándares éticos, tratamos a nuestros clientes y empleados con respeto
                                    y transparencia, y nos esforzamos por construir relaciones basadas en la confianza mutua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Privacidad y confidencialidad</h4>
                                <p class="card-text text-justify">Respetamos la privacidad y confidencialidad de nuestros clientes.<br>
                                    Nos comprometemos a proteger la información personal y los detalles del vehículo que
                                    nos confían, utilizando medidas de seguridad adecuadas para salvaguardar su privacidad.</p>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

<x-footer/>
</body>
</html>
