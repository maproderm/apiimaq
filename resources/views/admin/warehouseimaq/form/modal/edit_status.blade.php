<!--begin::Modal - New Target-->
<!--begin::Modal-->
<!--end::Modal-->
<div class="modal fade" id="kt_modal_edit_status" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <div class="card-body pt-5">

                    <form id="kt_modal_new_target_form" class="form" action="{{  route('formimaq.update',[$data->imaqform->id])  }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <!--begin::Row-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Actualización de Estatus</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text"><i class="bi bi-bezier text-primary"></i></i></span>
                                        <div class="overflow-hidden flex-grow-1">
                                            <select name="status" class="form-select rounded-start-0" data-control="select2" data-placeholder="Selecciona una opción" required>
                                                <option>Seleciona un Estatus</option>
                                                <option name="status" value="0">Pendiente</option>
                                                <option name="status" value="1">Atendido</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <input type="hidden" name="id" value="{{ $data->imaqform->id}}">
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Actualizar</span>
                                <span class="indicator-progress">Guardando...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>

            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
