<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Actualizar Usuario</h1>
                </div>
                <!--end::Heading-->
                <div class="card-body pt-5">
                    <!--begin::Form-->

                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="{{  route('all.users.update',[$data->user->id])  }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Nombre</label>
                                <div class="position-relative d-flex align-items-center">
                                    <input type="text" class="form-control" name="name" value="{{ $data->user->name ?? '' }}" required/>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Apellidos</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Datepicker-->
                                    <input type="text" class="form-control" name="last_name" value="{{ $data->user->last_name ?? '' }}" required/>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Estatus</label>

                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text"><i class="bi bi-bezier text-primary"></i></i></span>
                                    <div class="overflow-hidden flex-grow-1">
                                        <select name="status" class="form-select rounded-start-0" data-control="select2" data-placeholder="Selecciona una opción" required>
                                            <option>Seleciona un Estatus</option>
                                            <option name="status" value="1">Activo</option>
                                            <option name="status" value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--begin::Alert-->
                        <div class="alert alert-danger d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <i class="bi bi-exclamation-diamond fs-2hx text-danger me-4"></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-danger">Atención</h4>
                                <!--end::Title-->

                                <!--begin::Content-->
                                <span>Si actualiza el correo ó contraseña tenga en cuenta que al acceder al sistema estos cambiarán también.</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Alert-->

                        <div class="d-flex flex-column mb-8">
                            <label class="required fs-6 fw-semibold mb-2">Correo electrónico</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="email" class="form-control" name="email" value="{{ $data->user->email ?? '' }}" required/>
                            </div>
                        </div>

                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Password</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="password" xvalue="{{ $data->user->password ?? '' }}"/>
                            </div>
                        </div>

                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <input type="hidden" name="id" value="{{ $data->user->id}}">
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Actualizar</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->


                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
    <!--end::Modal dialog-->
</div>
