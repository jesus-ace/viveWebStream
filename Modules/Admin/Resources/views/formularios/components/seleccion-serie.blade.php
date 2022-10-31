<div id="form-main" class="d-lg-flex justify-content-lg-center align-items-lg-end justify-content-xxl-center mt-2">
    <div class="card cardnew w-100">
        <div class="card-body cardnew">
            <div class="has-feedback form-group mb-3">
                <!-- <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div><label class="form-label textH2" for="from_name">Seleccionar serie</label><span class="required">*</span>
                        </div>
                        <div>
                            <div class="form-floating mb-3">

                                <div class="mt-2" style="max-width: 276PX;max-height: 46px;">
                                    <input id="HGT05_rut" name="HGT05_rut"
                                        required type="text" class="form-control" placeholder="Ingresa tu Rut"
                                        value="" />
                                    <span class="errormensaje" style="color: #e94b59;" id="valida-rut"></span>
                                    {{-- <span class="errormensaje" style="color: black;"
                                        id="mensaje_precalificate">Antes de completar formulario tienes que haberte
                                        precalificado. Te invitamos a realizarlo <a
                                            href="{{ url('/') }}#ancla4"><strong>AQUÍ.</strong></a> </span> --}}
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end button1" style="margin-top: 70px;">
                                    <button id="btn_valida_rut" class="btn btn-primary d-xl-flex mt-3 buttonprin"
                                        type="button" disabled="disabled">
                                        seleccionar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <label class="col-form-label textcuestions" for="search-input">Seleccine serie</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <select class="form-control" id="select_titular">
                                   
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-6 text-right">
                                <button class="btn btn-primary mt-3 buttonprin" type="button"
                                        id="btn_continuar_precalificacion_rc" style="margin-top: 0px !important;">
                                    CONTINUAR
                                </button>
                            </div>
                        </div>


                    {{-- <div class="col-sm-12 col-md-7" id="precalificacion-titular__section" style="display: none;">
                        <div><label class="form-label textH2" for="from_name">Datos de Precalificación</label></div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" id="HGT05_nombre" readonly class="form-control"
                                        placeholder="HGsOFT" style="/*max-width: 212PX;*/max-height: 46px;">
                                    <label class="form-label label1" for="floatingInput">Nombre</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" id="HGT05_apellido" readonly class="form-control"
                                        placeholder="HGsOFT" style="/*max-width: 212PX;*/max-height: 46px;">
                                    <label class="form-label" for="floatingInput">Apellido</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" id="HGT05_telefono" readonly class="form-control"
                                        placeholder="HGsOFT" style="/*max-width: 212PX;*/max-height: 46px;">
                                    <label class="form-label" for="floatingInput">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" id="HGT05_correo" readonly class="form-control"
                                        placeholder="HGsOFT" style="/*max-width: 212PX;*/max-height: 46px;">
                                    <label class="form-label" for="floatingInput">Correo</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="input-sufix-old">
                                    <div class="form-floating mb-3 input-">
                                        <input type="text" id="HGT05_renta" readonly class="form-control"
                                            placeholder="HGsOFT" style="max-height: 46px;" 
                                            onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                        <label class="form-label" for="floatingInput">Renta</label>
                                        <div class="input-sufix-old-text">CLP</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="input-sufix-old">
                                    <div class="form-floating mb-3">
                                        <input type="text" disabled id="HGT05_ingresos" readonly class="form-control"
                                            placeholder="HGsOFT" style="/*max-width: 212PX;*/max-height: 46px;"
                                            onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                        <label class="form-label" for="floatingInput">Monto Preaprobado</label>
                                        <div class="input-sufix-old-text">UF</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary mt-3 buttonprin" type="button"
                                id="btn_continuar_precalificacion">
                                CONTINUAR
                            </button>
                        </div> 
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
