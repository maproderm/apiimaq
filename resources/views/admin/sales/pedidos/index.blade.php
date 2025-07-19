@extends('administrator.index')
@section('title','Pedidos | MaProDerm')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-body">
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
                            Crear Pedido
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
                                Cliente
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                Nuevo cliente
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
                <!--begin::Datatable-->
                {{-- <table class="table align-middle table-row-dashed fs-6 gy-5 ajax_datatable"> --}}
                <table class="table align-middle border rounded table-row-dashed fs-7 g-3 ajax_datatable" id="kt_datatable_example">
                {{-- <table xid="kt_datatable_horizontal_scroll" class="table align-middle table-striped table-row-bordered gy-3 gs-7 ajax_datatable"> --}}
                    <thead>
                        {{-- <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"> --}}
                        <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">
                            <th>N°</th>
                            <th>N° Web</th>
                            <th>N° Ciberwin</th>
                            <th>Cliente</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Fecha compra</th>
                            <th>Demora</th>
                            <th>Status</th>
                            <th>Cliente contactado</th>
                            <th>Fecha salida</th>
                            <th>Guia</th>
                            <th>Paqueteria</th>
                            <th class="text-center min-w-100px">Acciones</th>
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
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/admin/sales/orders/sales.js?v='.rand())  }}"></script>
@endpush

