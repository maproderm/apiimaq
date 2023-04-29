
<div class="modal fade" id="kt_modal_update_business_imaq" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
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
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="{{  route('business.update',[$data->business->id])  }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Actualizar Negocio</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-info fw-small fs-5">Recuerda que cualquier cambio que hagas aquí se reflejará en documentos y departamentos
                        <a href="javascript:;" class="fw-bold link-danger">Edición Bajo Responsabilidad</a>.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Nombre del producto</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="name" value="{{ $data->business->name ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Correo electrónico</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Datepicker-->
                                <input type="email" class="form-control" name="email" value="{{ $data->business->email ?? '' }}" required autocomplete="off" />
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
                            <label class="required fs-6 fw-semibold mb-2">Teléfono</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="phone" value="{{ $data->business->phone ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">RFC</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="rfc" value="{{ $data->business->rfc ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Calle</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="address" value="{{ $data->business->address ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Colonia</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="colony" value="{{ $data->business->colony ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Estado</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="state" value="{{ $data->business->state ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Código Postal</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="postal_code" value="{{ $data->business->postal_code ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Sitio Web</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="site_web" value="{{ $data->business->site_web ?? '' }}" required autocomplete="off"/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        {{-- <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Inventario mínimo</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="minimum_inventory" value="{{ $data->business->colony ?? '' }}" required/>
                            </div>
                        </div> --}}
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <input type="hidden" name="id" value="{{ $data->business->id}}">
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
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
