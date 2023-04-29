"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/business/get-imaq-all`;
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
                //NAME
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.name}`;
                }
            },
            {
                targets: 2,
                render: function (data, type, row) {
                    return `${row.email}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.phone}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.rfc}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.address}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.colony}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.state}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.postal_code}`;
                }
            },
            {
                targets: 3,
                render: function (data, type, row) {
                    return `${row.site_web}`;
                }
            },

            {
                //ACCIONES
                targets: 3,
                data: null,
                orderable: false,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_business">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button type="button" data-id="${row.id}" data-name="${row.name}" class="btn btn-icon btn-light-danger delete_business">
                            <i class="bi bi-trash fs-2"></i>
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
            datatable.columns(1).search(client_name).draw();
        });
    }

    // Delete
    let deleteBusiness = function () {
        $(document).on('click','.delete_business',function(){
            let id   = $(this).data('id');
            let name = $(this).data('name');
            Swal.fire({
                text: `¿Estas seguro de querer eliminar la empresa ${name}?`,
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "No, cancelar",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-primary"
                }
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url         : '/business-imaq/delete/'+ id,
                        dataType    : 'json',
                        contentType : false,
                        processData : false,
                        type        : 'GET',
                    }).done(function(response){
                        Swal.fire({
                            title : response.title,
                            text  : response.message,
                            icon  : response.icon
                        }).then( () => datatable.ajax.reload() );
                    });
                }
            });
        });
    }

    // UPDATE
    let updateBusiness = function () {
        $(document).on('click','.update_business',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/business-imaq/${id}/edit`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_business_imaq_modal').empty();
                    $('#edit_business_imaq_modal').append(response.render);
                    $('#kt_modal_update_business_imaq').modal('show');
                } else {
                    // Colocar mensaje en caso de error
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            deleteBusiness();
            updateBusiness();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
