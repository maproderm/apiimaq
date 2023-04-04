<!--begin::Modal - New Target-->
<!--begin::Modal-->

{{-- <div class="modal fade" tabindex="-1" id="kt_modal_edit_product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="mb-10">
                    <label for="" class="form-label">Modal example</label>
                    <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_1" data-placeholder="Select an option" data-allow-clear="true">
                        <option></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                        <option value="7">Option 7</option>
                        <option value="8">Option 8</option>
                        <option value="9">Option 9</option>
                        <option value="10">Option 10</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}
<!--end::Modal-->
<div class="modal fade" id="kt_modal_edit_product" tabindex="-1" aria-hidden="true">
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
                <form id="kt_modal_new_target_form" class="form" action="{{  route('productos.mapro.update',[$data->product->id])  }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Actualizar Producto</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-info fw-small fs-5">Recuerda que cualquier cambio que hagas aquí se reflejará en todos los departamentos
                        <a href="javascript:;" class="fw-bold link-primary">Edición Bajo Responsabilidad</a>.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-3">
                            <span>Imagen del producto</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Tipos de archivos permitidos: png, jpg, jpeg."></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Image input wrapper-->
                        <div class="mt-1">
                            <!--begin::Image placeholder-->
                            <style>.image-input-placeholder { background-image: url('public/metronic/assets/media/svg/files/blank-image.svg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('public/metronic/assets/media/svg/files/blank-image-dark.svg'); }</style>
                            <!--end::Image placeholder-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline image-input-placeholder image-input-empty" data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-100px h-100px" style="background-image: url('public/metronic/assets/media/avatars/300-6.jpg')"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Edit-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Cambiar imagen">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancelar Imagen">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Eliminar Imagen">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Image input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Nombre del producto</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="text" class="form-control" name="name_product_inventory" value="{{ $data->product->name_product_inventory ?? '' }}" required/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Cantidad (Stock Actual)</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Datepicker-->
                                <input type="number" class="form-control" name="stock_inventory" value="{{ $data->product->stock_inventory ?? '' }}" disabled/>
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
                            <label class="required fs-6 fw-semibold mb-2">División</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="division_id">
                                <option></option>
                                @foreach ($data->divisions as $division)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->division_id == $division->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="division_id"
                                    value="{{ $division->id }}"
                                >{{ $division->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Categoría(1:AlmacenIMAQ, 3:PT)</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="category_id">
                                <option></option>
                                @foreach ($data->categories as $category)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->category_id == $category->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="category_id"
                                    value="{{ $category->id }}"
                                >{{ $category->division_id }}-- {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Ubicación</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="level_area_id">
                                <option></option>
                                @foreach ($data->ubicacions as $ubicacion)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->level_area_id == $ubicacion->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="level_area_id"
                                    value="{{ $ubicacion->id }}"
                                >{{ $ubicacion->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">SKU</label>
                            <!--begin::Input-->

                            <div class="input-group mb-5">
                                <span class="input-group-text">
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/metronic/releases/2022-07-14-092914/core/html/src/media/icons/duotune/ecommerce/ecm010.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="currentColor"/>
                                        <path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <input type="text" style="text-transform:uppercase" class="form-control" name="sku_product_inventory" value="{{ $data->product->sku_product_inventory ?? '' }}" required disabled/>
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
                            <label class="required fs-6 fw-semibold mb-2">Proveedor</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="provider_id">
                                <option></option>
                                @foreach ($data->providers as $provider)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->provider_id == $provider->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="provider_id"
                                    value="{{ $provider->id }}"
                                >{{ $provider->rfc }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Marca</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="brand_id">
                                <option></option>
                                @foreach ($data->brands as $brand)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->brand_id == $brand->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="brand_id"
                                    value="{{ $brand->id }}"
                                >{{ $brand->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Unidades de medida</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="unit_of_measurement_id">
                                <option></option>
                                @foreach ($data->medidas as $medida)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->unit_of_measurement_id == $medida->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="unit_of_measurement_id"
                                    value="{{ $medida->id }}"
                                >{{ $medida->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Tamaño</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="size_product_inventory">
                                @foreach ($data->sizes as $size)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->size_product_inventory == $size->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="size_product_inventory"
                                    value="{{ $size->id }}"
                                >{{ $size->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Tipo de material</label>
                            <select class="form-select" data-control="select2" data-placeholder="Selecciona una opción" name="type_of_material_id">
                                @foreach ($data->materials as $material)
                                <option
                                    @isset($data->product)
                                        @if ($data->product->type_of_material_id == $material->id)
                                        selected
                                        @endif
                                    @endisset
                                    name="type_of_material_id"
                                    value="{{ $material->id }}"
                                >{{ $material->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Inventario mínimo</label>
                            <div class="position-relative d-flex align-items-center">
                                <input type="number" class="form-control" name="minimum_inventory" value="{{ $data->product->minimum_inventory ?? '' }}" required/>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Precio</label>
                            <div class="input-group mb-5">
                                <span class="input-group-text">$</span>
                                <input id="number" type="number" class="form-control" step=".01" name="price_product_inventory" value="{{ $data->product->price_product_inventory ?? '' }}" required/>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Precio Promoción</label>
                            <div class="input-group mb-5">
                                <span class="input-group-text">$</span>
                                <input id="number" type="number" class="form-control" name="discount_product_inventory" step=".01" value="{{ $data->product->discount_product_inventory ?? '' }}"/>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Descripción</label>
                        <textarea class="form-control" rows="3" name="description_product_inventory" aria-label="With textarea" value="{{ $data->product->description_product_inventory ?? '' }}">{{ $data->product->description_product_inventory}}</textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <input type="hidden" name="id" value="{{ $data->product->id}}">
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
