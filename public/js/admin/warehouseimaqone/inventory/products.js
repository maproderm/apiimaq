"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    //console.log('JS cargado');

    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/imaq-products-inventory/get-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    return `${row.id}`;
                }
            },
            {
                //CLAVE
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.clave}`;
                }
            },
            {
                //NAME
                targets   : 2,
                render    : function (data, type, row) {
                    return `${row.name}`;
                }
            },

            {
                //ALMACEN_ID
                targets: 3,
                className: 'text-center',
                orderable: false,
                render: function (data, type, row) {
                    return `${row.division.name}`;
                }
            },
            {
                //CATEGORIA_ID
                targets: 4,
                className: 'text-center',
                orderable: false,
                render: function (data, type, row) {
                    return `${row.category.name}`;
                }
            },
            {   // STOCK IMAQ 1
                targets: 6,
                className: 'text-center',
                render: function (data, type, row) {
                    return row.stock_imaq1 ?? 0;
                }
            },
            {   // STOCK IMAQ 2
                targets: 7,
                className: 'text-center',
                render: function (data, type, row) {
                    return row.stock_imaq2 ?? 0;
                }
            },
            {   // STOCK TOTAL
                targets: 8,
                className: 'text-center fw-bold',
                render: function (data, type, row) {
                    if (row.is_low_stock) {
                    return `<span class="text-danger">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                ${row.stock_total}
                            </span>`;
                }
                    return row.stock_total;
                }
            },
            {
                //UNIDAD DE MEDIDA
                targets: 5,
                className: 'text-center',
                render: function (data, type, row) {
                    return `${row.umedida.name}`;
                }
            },
            {
                //ACCIONES
                targets: 9,
                data: null,
                orderable: false,
                className: 'text-center',
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-icon btn-success btn-sm"
                                onclick="openInventoryModal('in', ${row.id}, '${row.name}')">
                            <i class="bi bi-plus-lg"></i>
                        </button>

                        <button class="btn btn-icon btn-danger btn-sm"
                                onclick="openInventoryModal('out', ${row.id}, '${row.name}')">
                            <i class="bi bi-dash-lg"></i>
                        </button>
                    `;
                }
            },
        ]
        datatable = factoryNixDit.methods.activateDataTable(url,columns);
    }



    // Search Datatable
    var handleSearchDatatable = function () {
        $('#filter_client_name').on('keyup', function(event){ // Filter by client name
            var client_name = $(this).val();
            // datatable.search(event.target.value).draw();
            datatable.search(client_name).draw();

            // datatable.columns(1).search(client_name).draw();
            // dt.search(e.target.value).draw();
        });
    }

    // Search Datatable
    var handleSearchDatatable = function () {
        $('#filter_client_name').on('keyup', function(event){ // Filter by client name
            var client_name = $(this).val();
            datatable.search(client_name).draw();
        });
    }

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons

        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');
                const id = e.target.getAttribute('data-user-id');
                // Get customer name
                const productName = parent.querySelectorAll('td')[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Estas seguro de querer eliminar el usuario " + productName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Si, eliminar!",
                    cancelButtonText: "No, cancelar",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: '/user/delete/'+ id,
                            dataType: 'json',
                            contentType: false,
                            processData: false,
                            type: 'GET',
                        }).done(function(response){
                            Swal.fire({
                                title: response.title,
                                text: response.message,
                                icon: response.icon,
                                timer: 2000
                            }).then( () => location.reload() );
                        });
                    }
                });
            })
        });
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            handleDeleteRows();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
