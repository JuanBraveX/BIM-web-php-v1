<?php include("HTML/navBar.html"); ?>
<?php include("HTML/imagenFondo.html"); ?>

<section class="text-center">
    <h2>ESTÁS A UN CLICK DE QUE PODAMOS AYUDARTE</h2>
    <h3 class="mb-5">Contactanos</h3>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.112751547331!2d-100.40012378612485!3d20.583452579216146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d345b4a07e9ea5%3A0x2a267a29ca259cbb!2sBusiness%20in%20Motion!5e0!3m2!1ses-419!2sus!4v1678827113491!5m2!1ses-419!2sus"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-4">
            <ul class="list-unstyled">
                <li>
                    <i class="bi bi-geo-alt text-primary"></i>
                    <p><small>C Ignacio Pérez Sur 17 Col. el Carrizal, Qro Querétero</small></p>
                </li>
                <li>
                    <i class="bi bi-telephone text-primary"></i>
                    <p><small>+ 01 234 567 89</small></p>
                </li>
                <li>
                    <i class="bi bi-envelope text-primary"></i>
                    <p><small>contact@gmail.com</small></p>
                </li>
            </ul>
        </div>
    </div>
</section>

<div id="formulario">
    <!--Tittle-->
    <div class="w-100">
        <div id="title" class="text-center w-100 d-md-block">
            <h4>¿DESEAS QUE TE CONTACTEMOS?</h4>
        </div>
    </div>
    <!--Formulario-->
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
        <form class="p-5 text-white rounded" style="background-color: #141a43bb;">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h2 class="text-center">Informacion Personal</h2>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Nombre*</label>
                        <input type="text" id="form6Example1" class="form-control" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Apellidos*</label>
                        <input type="text" id="form6Example2" class="form-control" />

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Email*</label>
                        <input type="email" id="form6Example5" class="form-control" />

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Telefono*</label>
                        <input type="tel" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>
            <h2 class="text-center">Informacion Profecional</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Empresa*</label>
                        <input type="tel" id="form6Example6" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Puesto/Cargo*</label>
                        <input type="tel" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>
            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Escribe tu mensaje aquís</label>
            </div>
            <!-- Submit button -->
            <div class="w-100 d-flex align-items-center justify-content-center">
                <button type="submit"
                    class="w-50 btn btn-primary btn-block mb-4 d-flex align-items-center justify-content-center">Enviar</button>
            </div>
        </form>
    </div>
</div>
<!--title-->
<div class="w-100 p-5">
    <div id="title" class="text-black text-center w-100 d-md-block" style="background-color: #fff;">
        <h4>¿TE GUSTARÍA FORMAR PARTE DEL EQUIPO?</h4>
    </div>
</div>
<!-- Submit button -->
<div class="w-100 d-flex align-items-center justify-content-center p-2">
    <a href="empleate.html" style="text-decoration: none;">
        <button type="button"
            class="w-100 btn btn-outline-primary btn-block mb-4 d-flex align-items-center justify-content-center">Ir
            a la sección "<b>Empléate</b>"</button>
    </a>
</div>




<?php include("HTML/footer.html"); ?>