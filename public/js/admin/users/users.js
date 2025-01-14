"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/users/get-general-all`;
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
                    return `${row.last_name}`;
                }
            },
            {
                //LINE_ID
                targets: 3,
                render: function (data, type, row) {
                    return `${row.email}`;
                }
            },
            {
                //LINE_ID
                targets: 4,
                render: function (data, type, row) {
                    if (row.status == 1) {
                        return `<span class="badge badge-light-success">Activo</span>`;
                    }if (row.status == 0){
                        return `<span class="badge badge-light-danger">Inactivo</span>`;
                    } else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //LINE_ID
                targets: 5,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    if (row.last_login == null) {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    } else {
                        return `${row.last_login}`;
                    }

                }
            },
            {
                //ACCIONES
                targets: 6,
                data: null,
                orderable: false,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_user">
                            <i class="bi bi-pencil "></i>
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
            datatable.search(client_name).draw();
        });
    }

    let updateUser = function () {
        $(document).on('click','.update_user',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/users-imaq/${id}/edit`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_user_modal').empty();
                    $('#edit_user_modal').append(response.render);
                    $('#kt_modal_edit_user').modal('show');
                } else {
                    // Colocar mensaje en caso de error
                }
            });
        });
    }

    // Delete
    let deleteUser = function () {
        $(document).on('click','.delete_user',function(){
            let id   = $(this).data('id');
            let name = $(this).data('name');
            Swal.fire({
                text: `¿Estas seguro de querer eliminar el usuario ${name}?`,
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
                        url         : '/productos-mapro/delete/'+ id,
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

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            updateUser(); // Update user
            deleteUser(); // Delete user
        }
    }

}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
