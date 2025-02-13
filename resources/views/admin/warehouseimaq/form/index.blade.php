@extends('administrator.index')
@section('title','Cotización Mi Marca | IMAQ')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-body">
                {{-- <div class="p-5">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Buscar producto" id="filter_client_name"/>
                            <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                        </div>
                    </div>
                </div> --}}
                {{-- INICIO OPCION 2 --}}
                <div class="card-header align-items-center py-1 gap-2 gap-md-5">

                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative">
                            {{-- <span class="svg-icon fs-1 position-absolute ms-4">...</span> --}}
                            {{-- <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" /> --}}
                            <input type="text" class="form-control" placeholder="Buscar" id="filter_client_name"/>
                            <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_datatable_example_1_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>

                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                            Exportar
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            {{-- <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="copy">
                                Copy to clipboard
                                </a>
                            </div> --}}
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            {{-- <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="excel">
                                Export as Excel
                                </a>
                            </div> --}}
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="csv">
                                Exportar en CSV
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                Exportar en PDF
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Export dropdown-->

                        <!--begin::Hide default export buttons-->
                        <div id="kt_datatable_example_buttons" class="d-none"></div>
                        <!--end::Hide default export buttons-->
                    </div>
                </div>
                {{-- FIN OPCION 2 --}}

                <!--begin::Datatable-->
                {{-- <table class="table align-middle table-row-dashed fs-6 gy-5 ajax_datatable"> --}}
                    {{-- INICIO ORIGINAL --}}
                {{-- <table id="kt_datatable_example" class="table align-middle table-striped table-row-bordered gy-3 gs-7 ajax_datatable"> --}}
                    {{-- FIN ORIGINAL --}}
                <table class="table align-middle border rounded table-row-dashed fs-7 g-3 ajax_datatable" id="kt_datatable_example">
                    <thead>
                    {{-- <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"> --}}
                    <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">
                        <th>N°</th>
                        <th class="min-w-100px">Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th class="min-w-100px">Teléfono</th>
                        <th class="min-w-100px">Estado</th>
                        <th>Servicio</th>
                        <th>Linea de producto</th>
                        <th>Cantidad</th>
                        <th>Contactar al horario</th>
                        <th>Mensaje</th>
                        <th class="text-center min-w-150px">Status</th>
                        {{-- <th class="text-center min-w-100px">Acciones</th> --}}
                    </tr>
                    </thead>
                    <tbody xclass="text-gray-600 fw-bold">
                    </tbody>
                </table>
                <!--end::Datatable-->
            </div>
        </div>
    </div>
</div>
<div class="" id="edit_message_modal"></div>
<div class="" id="edit_status_modal"></div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/admin/warehouseimaq/formimaq/formimaq.js?v='.rand())  }}"></script>
@endpush


{{--
<div class="card card-p-0 card-flush">
	<div class="card-header align-items-center py-5 gap-2 gap-md-5">
		<div class="card-title">
			<!--begin::Search-->
			<div class="d-flex align-items-center position-relative my-1">
				<span class="svg-icon fs-1 position-absolute ms-4">...</span>
				<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
			</div>
			<!--end::Search-->
			<!--begin::Export buttons-->
			<div id="kt_datatable_example_1_export" class="d-none"></div>
			<!--end::Export buttons-->
		</div>
		<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
			<!--begin::Export dropdown-->
			<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
				<i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
				Export Report
			</button>
			<!--begin::Menu-->
			<div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3" data-kt-export="copy">
					Copy to clipboard
					</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3" data-kt-export="excel">
					Export as Excel
					</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3" data-kt-export="csv">
					Export as CSV
					</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3" data-kt-export="pdf">
					Export as PDF
					</a>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::Menu-->
			<!--end::Export dropdown-->

			<!--begin::Hide default export buttons-->
			<div id="kt_datatable_example_buttons" class="d-none"></div>
			<!--end::Hide default export buttons-->
		</div>
	</div>
	<div class="card-body">
		<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
			<thead>
				<!--begin::Table row-->
				<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
					<th class="min-w-100px">Customer Name</th>
					<th class="min-w-100px">Email</th>
					<th class="min-w-100px">Status</th>
					<th class="min-w-100px">Date Joined</th>
					<th class="text-end min-w-75px">No. Orders</th>
					<th class="text-end min-w-75px">No. Products</th>
					<th class="text-end min-w-100px pe-5">Total</th>
				</tr>
				<!--end::Table row-->
			</thead>
			<tbody class="fw-semibold text-gray-600">
				<tr class="odd">
					<td>
						<a href="#" class="text-gray-900 text-hover-primary">Emma Smith</a>
					</td>
					<td>
						<a href="#" class="text-gray-900 text-hover-primary">e.smith@kpmg.com.au</a>
					</td>
					<td>
						<div class="badge badge-light-success">Active</div>
					</td>
					<td data-order="2022-03-10T14:40:00+05:00">10 Mar 2022, 2:40 pm</td>
					<td class="text-end pe-0">94</td>
					<td class="text-end pe-0">103</td>
					<td class="text-end">$500.00</td>
				</tr>
			</tbody>
		</table>
	</div>
</div> --}}
