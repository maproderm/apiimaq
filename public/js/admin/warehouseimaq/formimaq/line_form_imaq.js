"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/lineasmimarca/get-imaq-all`;
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
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.name}`;
                    }
                }
            },
            {
                //LINE_ID
                targets: 2,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    if(row.status == 0){
                        return `
                        <span class="badge badge-danger">Inactivo</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-danger update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }else {
                        return `
                        <span class="badge badge-success">Activo</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-success update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }
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

    let updateProduct = function () {
        $(document).on('click','.update_status',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/statusservice/editar/${id}`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_status_service_modal').empty();
                    $('#edit_status_service_modal').append(response.render);
                    $('#kt_modal_edit_status_service').modal('show');
                } else {
                    // Colocar mensaje en caso de error
                }
            });
        });
    }

    let updateMessage = function () {
        $(document).on('click','.update_message',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/message/editar/${id}`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_message_modal').empty();
                    $('#edit_message_modal').append(response.render);
                    $('#kt_modal_edit_message').modal('show');
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
            updateProduct(); // Update product
            updateMessage(); // Update product
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
