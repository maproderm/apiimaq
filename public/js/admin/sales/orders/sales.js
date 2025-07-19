"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/pedidos/get-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    // return `${row.id}`;
                    return `${row.id}`;
                }
            },
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    // return `${row.id}`;
                    return `${row.num_factura_web}`;
                }
            },
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    // return `${row.id}`;
                    return `${row.num_factura_web}`;
                }
            },
            {
                //NAME
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.user.name} ${row.user.last_name}`;
                }
            },
            {
                //EMAIL
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.user.email}`;
                }
            },
            {
                //PHONE
                targets: 7,
                render: function (data, type, row) {
                    return `${row.client_information?.phone ?? 'Sin teléfono'}`;
                }
            },
            {
                //DATE CREATED
                targets   : 1,
                render    : function (data, type, row) {
                    if (row.created_at == null) {
                        return `<span class="badge badge-secondary">--</span>`;
                    }else {
                        let date       = new Date(row.created_at),
                        // dateFormat = new Intl.DateTimeFormat('es', { year: 'numeric',month: 'long',day: '2-digit' }).format(date);
                        dateFormat = new Intl.DateTimeFormat('es').format(date);
                        return `${dateFormat}`;
                    }
                }
            },
            {
                //DATE CREATED
                targets   : 1,
                render    : function (data, type, row) {
                    const createdAt = new Date(row.created_at);
                    const now = new Date();

                    const diffMs = now - createdAt;
                    const diffDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));
                    //const diffHours = Math.floor(diffMs / (1000 * 60 * 60));
                    //const diffMinutes = Math.floor(diffMs / (1000 * 60));

                    //if (diffDays >= 1) {
                      //  return `${diffDays} días`;
                    //} else if (diffHours >= 1) {
                      //  return `${diffHours} horas`;
                    //} else {
                      //  return `${diffMinutes} minutos`;
                    //}


                    let badgeClass = 'badge-light'; // valor por defecto
                    let label = `${diffDays} día(s)`;

                    if (diffDays >= 3) {
                        badgeClass = 'badge-danger';
                    } else if (diffDays === 2) {
                        badgeClass = 'badge-warning';
                    }

                    return `<span class="badge ${badgeClass}">${label}</span>`;
                }
            },
            {
                //LINE_ID
                targets: 12,
                className : 'dt-head-center dt-body-right',
                render: function (data, type, row) {
                    if(row.status == 0){
                        return `
                        <span class="badge badge-secondary">Borrador</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-secondary update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 1) {
                        return `
                        <span class="badge badge-light">Cotización</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-secondary update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }
                    if (row.status == 2) {
                        return `
                        <span class="badge badge-dark">Por confirmar</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-dark update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 3) {
                        return `
                        <span class="badge badge-warning">Falta datos</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 4) {
                        return `
                        <span class="badge badge-info">Procesando</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-info update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 5) {
                        return `
                        <span class="badge badge-primary">Listo para envio</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-primary update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 6) {
                        return `
                        <span class="badge badge-success">Enviado</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-success update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }if (row.status == 7) {
                        return `
                        <span class="badge badge-danger">Cancelado</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-danger update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }else {
                        return `
                        <span class="badge badge-warning">Ninguno</span>
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_status">
                            <i class="bi bi-pencil-square fs-2 "></i>
                        </button>
                        `;
                    }



                }
            },
            {
                //STATUS
                targets   : 3,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if (row.status == 0) {
                        return `<span class="badge badge-secondary">Borrador</span>`;
                    }if (row.status == 1){
                        return `<span class="badge badge-light-primary">Cotización</span>`;
                    }if (row.status == 2){
                        return `<span class="badge badge-light-info">Procesando</span>`;
                    }if (row.status == 3){
                        return `<span class="badge badge-success">Enviado</span>`;
                    }if (row.status == 4){
                        return `<span class="badge badge-light-danger">Cancelado</span>`;
                    }if (row.status == 5){
                        return `<span class="badge badge-warning">Listo para Enviar</span>`;
                    }  else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //DATE CREATED
                targets   : 1,
                render    : function (data, type, row) {
                    if (row.created_at == null) {
                        return `<span class="badge badge-secondary">--</span>`;
                    }else {
                        let date       = new Date(row.created_at),
                        // dateFormat = new Intl.DateTimeFormat('es', { year: 'numeric',month: 'long',day: '2-digit' }).format(date);
                        dateFormat = new Intl.DateTimeFormat('es').format(date);
                        return `${dateFormat}`;
                    }
                }
            },
            //{
                //NUMERO DE GUIA
                //targets   : 1,
                //className: 'text-center',
                //render    : function (data, type, row) {
                    //if (row.num_tracking == null) {
                      //  return `<span class="badge badge-secondary">--</span>`;
                    //}else {
                  //      return `${row.num_tracking}`;
                //    }
              //  }
            //},
            {
                //NUMERO DE GUIA Y PAQUETERIA
                targets   : 11,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.num_tracking == null){
                        return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-danger update_message">
                            <i class="bi bi-file-earmark-x fs-2 "></i>
                        </button>
                        `;
                    }else {
                        return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-success update_message">
                            <i class="bi bi-file-earmark-check fs-2 "></i>
                        </button>

                        `;
                    }
                }
            },
            {
                //EMAIL
                targets   : 1,
                className: 'text-center',
                render    : function (data, type, row) {
                    if (row.shipping_package == null) {
                        return `<span class="badge badge-secondary">--</span>`;
                    }else {
                        return `${row.shipping_package}`;
                    }
                }
            },

            {
                //ACCIONES
                targets: 4,
                data: null,
                orderable: false,
                className: 'text-center',
                render: function (data, type, row) {
                    return `
                        <a href="#" class="btn btn-icon btn-light-primary"><i class="bi bi-eye-fill fs-2 me-2"></i></i></a>
                        <a href="#" class="btn btn-icon btn-light-info"><i class="bi bi-printer fs-2 me-2"></i></a>
                        <a href="#" class="btn btn-icon btn-light-warning" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" id="kt_toolbar_primary_button"><i class="bi bi-pencil"></i></i></a>
                        <a href="#" class="btn btn-icon btn-light-danger"><i class="bi bi-trash fs-2 me-2"></i></i></a>
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
            updateMessage(); // Ver codigo de guia de paqueteria
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
