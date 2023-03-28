<?php include("HTML/navBar.html"); ?>
<?php include("HTML/imagenFondo.html"); ?>
<div class="col-md-7 text-center">
    <p class="p-5 ">¡Únete al equipo de Business in Motion! Pon a prueba tus conocimientos y crece de manera
        profesional en un excelente ambiente laboral.
    </p>
</div>
<div id="formulario">
    <!--Tittle-->
    <div class="w-100">
        <div id="title" class="text-center w-100 d-md-block">
            <h4>COMPLETA EL FORMULARIO</h4>
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
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Fecha de Nacimento*</label>
                        <input type="date" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>
            <h2 class="text-center">Informacion Profecional</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Último grado de estudios*</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleciona alguno</option>
                            <option value="1">Universidad truca</option>
                            <option value="2">Preparatoria finalizada</option>
                            <option value="3">Preparatoria</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Selecciona el área de tu interes*</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleciona alguno</option>
                            <option value="1">Desarrollo</option>
                            <option value="2">Marketing</option>
                            <option value="3">Finanzas</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Status*</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleciona alguno</option>
                            <option value="1">Desempleado</option>
                            <option value="2">Estudiando</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Agregar tu CV*</label>
                        <input type="file" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Descripcion del porque debemos contratarte</label>
            </div>

            <!-- Submit button -->
            <div class="w-100 d-flex align-items-center justify-content-center">
                <button type="submit"
                    class="w-50 btn btn-primary btn-block mb-4 d-flex align-items-center justify-content-center">Enviar</button>
            </div>
        </form>
    </div>
</div>

<div id="opiniones">
    <div class="w-100">
        <div class="text-center w-100 d-md-block">
            <h4>REVISA LA OPINIÓN DE PROFESIONALES</h4>
        </div>
    </div>
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-4">
                <div class="container p-3 d-flex justify-content-center text-center h-100 ">
                    <div class="p-4 bg-light shadow ">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <img class="rounded-circle shadow-4-strong w-50" src="IMG/Juan.jpg" />
                            <h4 class="name mt-3">Juan Antonio Pedraza</h4>
                            <h4 class="idd">@juanpedraza</h4>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <p class="number">1069 Followers</p>
                            </div>
                            <div class="text mt-3">
                                <p>Juan is a creator of minimalistic x bold graphics
                                    and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with
                                    FND night.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-twitter m-2"></i>
                                <i class="bi bi-facebook m-2"></i>
                                <i class="bi bi-instagram m-2"></i>
                                <i class="bi bi-linkedin m-2"></i>
                            </div>
                            <div class=" px-2 rounded mt-4 date ">
                                <span class="join">Se unio en Enero 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container p-3 d-flex justify-content-center text-center h-100 ">
                    <div class="p-4 bg-light shadow ">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <img class="rounded-circle shadow-4-strong w-50" src="IMG/Salvador Yander Navarrete.jpg" />
                            <h4 class="name mt-3">Yander Navarrete</h4>
                            <h4 class="idd">@w_yandel100</h4>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <p class="number">1069 Followers</p>
                            </div>
                            <div class="text mt-3">
                                <p>Yander Navarrete is a creator of minimalistic x bold graphics
                                    and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with
                                    FND night.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-twitter m-2"></i>
                                <i class="bi bi-facebook m-2"></i>
                                <i class="bi bi-instagram m-2"></i>
                                <i class="bi bi-linkedin m-2"></i>
                            </div>
                            <div class=" px-2 rounded mt-4 date ">
                                <span class="join">Se unio en Enero 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container p-3 d-flex justify-content-center text-center h-100 ">
                    <div class="p-4 bg-light shadow ">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <img class="rounded-circle shadow-4-strong w-50" src="IMG/Daniel.jpg" />
                            <h4 class="name mt-3">Daniel Gonzales</h4>
                            <h4 class="idd">@dani_doble_g</h4>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <p class="number">1069 Followers</p>
                            </div>
                            <div class="text mt-3">
                                <p>Daniel is a creator of minimalistic x bold graphics
                                    and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with
                                    FND night.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-twitter m-2"></i>
                                <i class="bi bi-facebook m-2"></i>
                                <i class="bi bi-instagram m-2"></i>
                                <i class="bi bi-linkedin m-2"></i>
                            </div>
                            <div class=" px-2 rounded mt-4 date ">
                                <span class="join">Se unio en Enero 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include("HTML/footer.html"); ?>