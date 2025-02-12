<!--begin::Modal - New Target-->
<!--begin::Modal-->
<!--end::Modal-->
<div class="modal fade" id="kt_modal_edit_message" tabindex="-1" aria-hidden="true">
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

                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Mensaje</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control" rows="3" name="description_product_inventory" aria-label="With textarea" value="{{ $data->imaqform->name ?? '' }}">{{ $data->imaqform->message ?? '' }}</textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Fecha de solicitud</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    {{-- <input type="date" class="form-control" name="name_product_inventory" value="{{ $data->imaqform->created_at ?? '' }}" required/> --}}

                                    <div type="month" class="text-info fw-small fs-5" value="{{ $data->imaqform->created_at ?? '' }}">{{ $data->imaqform->created_at ?? '' }}
                                        {{-- <a href="javascript:;" class="fw-bold link-primary" value="{{ $data->imaqform->created_at ?? '' }}"></a> --}}
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Ciudad</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    {{-- <input type="date" class="form-control" name="name_product_inventory" value="{{ $data->imaqform->created_at ?? '' }}" required/> --}}

                                    <div type="month" class="text-info fw-small fs-5" value="{{ $data->imaqform->form_city ?? '' }}">{{ $data->imaqform->form_city ?? '' }}
                                        {{-- <a href="javascript:;" class="fw-bold link-primary" value="{{ $data->imaqform->created_at ?? '' }}"></a> --}}
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Action buttons-->
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <input type="hidden" name="id" value="{{ $data->imaqform->id}}">
                            <!--begin::Button-->
                            {{-- <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Actualizar</span>
                                <span class="indicator-progress">Guardando...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button> --}}
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
