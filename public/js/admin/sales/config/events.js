"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/events/get-maproderm-all`;
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
                //LINE_ID
                targets: 2,
                render: function (data, type, row) {
                    return `${row.productor}`;
                }
            },
            {
                //LINE_ID
                targets: 2,
                render: function (data, type, row) {
                    return `${row.artista}`;
                }
            },
            {
                //LINE_ID
                targets: 2,
                render: function (data, type, row) {
                    return `${row.ciudad}`;
                }
            },
            {
                //LINE_ID
                targets: 3,
                render: function (data, type, row) {
                    if (row.fecha_inicio == null) {
                        return `<span class="badge badge-secondary">--</span>`;
                    }else {
                        let date       = new Date(row.fecha_inicio),
                        dateFormat = new Intl.DateTimeFormat('es', { year: 'numeric',month: 'long',day: '2-digit'}).format(date);
                        // dateFormat = new Intl.DateTimeFormat('es').format(date);
                        return `${dateFormat}`;
                    }
                    //return `${row.updated_at}`;
                }
            },

            {
                //ACCIONES
                targets: 4,
                data: null,
                orderable: false,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning pulse pulse-warning update_event">
                        <i class="bi bi-pencil"></i>
                        <span class="pulse-ring"></span>
                        </button>
                        <button type="button" data-id="${row.id}" data-name="${row.name}" class="btn btn-icon btn-light-danger pulse pulse-danger delete_event">
                            <i class="bi bi-trash fs-2"></i>
                            <span class="pulse-ring"></span>
                        </button>
                    `;
                    //class="btn btn-icon btn-light pulse pulse-secondary"
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
    let deleteBrand = function () {
        $(document).on('click','.delete_event',function(){
            let id   = $(this).data('id');
            let name = $(this).data('name');
            Swal.fire({
                text: `¿Estas seguro de querer eliminar el evento ${name}?`,
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
                        url         : '/events-mpd/delete/'+ id,
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

    //Update
    let updateBrand = function () {
        $(document).on('click','.update_event',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/events-mpd/${id}/edit`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_event_mpd_modal').empty();
                    $('#edit_event_mpd_modal').append(response.render);
                    $('#kt_modal_update_event_mpd').modal('show');
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
            deleteBrand();
            updateBrand();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
