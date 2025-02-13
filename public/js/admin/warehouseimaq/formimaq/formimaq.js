"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/cotizacionmimarca/get-imaq-all`;
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
                //NAME
                targets   : 2,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.last_name}`;
                    }
                }
            },
            {
                //NAME
                targets   : 3,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.email}`;
                    }
                }
            },
            {
                //NAME
                targets   : 4,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.phone}`;
                    }
                }
            },
            {
                //NAME
                targets   : 6,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.stateformimaq.name}`;
                    }
                }
            },
            {
                //NAME
                targets   : 7,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.serviceformimaq.name}`;
                    }
                }
            },
            {
                //NAME
                targets   : 8,
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.lineformimaq.name}`;
                    }
                }
            },
            {
                //NAME
                targets   : 9,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `${row.quantity} piezas`;
                    }
                }
            },
            {
                //NAME
                targets   : 10,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.hour == 1){
                        return `<span class="badge badge-info">9:00 AM</span>`;
                    }if (row.hour == 2) {
                        return `<span class="badge badge-info">10:00 AM</span>`;
                    }if (row.hour == 3){
                        return `<span class="badge badge-info">11:00 AM</span>`;
                    }if (row.hour == 4){
                        return `<span class="badge badge-info">12:00 PM</span>`;
                    }if (row.hour == 5){
                        return `<span class="badge badge-info">13:00 PM</span>`;
                    }if (row.hour == 6){
                        return `<span class="badge badge-info">14:00 PM</span>`;
                    }if (row.hour == 7){
                        return `<span class="badge badge-info">15:00 PM</span>`;
                    }if (row.hour == 8){
                        return `<span class="badge badge-info">16:00 PM</span>`;
                    }if (row.hour == 9){
                        return `<span class="badge badge-info">17:00 PM</span>`;
                    }if (row.hour == 10){
                        return `<span class="badge badge-info">18:00 PM</span>`;
                    }if (row.hour == 11){
                        return `<span class="badge badge-info">Después de 18:00 PM</span>`;
                    } else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //NAME
                targets   : 11,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.name == null){
                        return `<span class="badge badge-light-warning">Dato Faltante</span>`;
                    }else {
                        return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-primary update_message">
                            <i class="bi bi-eye fs-2 "></i>
                        </button>

                        `;
                    }
                }
            },
            {
                //LINE_ID
                targets: 12,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    if(row.status == 0){
                        return `
                        <span class="badge badge-danger">Pendiente</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-danger update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 1) {
                        return `
                        <span class="badge badge-success">Atendido</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-success update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }else {
                        return `
                        <span class="badge badge-warning">No respondió</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_status">
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
                url         : `/status/editar/${id}`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_status_modal').empty();
                    $('#edit_status_modal').append(response.render);
                    $('#kt_modal_edit_status').modal('show');
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
