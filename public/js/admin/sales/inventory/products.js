"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    let datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/productos/get-maproderm-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    return `${row.id}`;
                    // return `${row.sku_product_inventory}`;
                }
            },
            {
                //IMAGE
                targets   : 1,
                orderable: false,
                render    : function (data, type, row) {
                    var url = HOST_URL;
                    if (row.image) {
                        url += row.image;
                    } else {
                        url += '/metronic/assets/media/products/image.png';
                    }
                    var image = '<div class="d-flex align-items-center">\
								<div class="symbol symbol-90 symbol-sm flex-shrink-0">\
									<img class="" src="'+ url + '" alt="photo">\
								</div>\
							</div>';
                    return image;
                }
            },
            {
                //NAME
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.name_product_inventory}`;
                }
            },
            {
                //CANTIDAD
                targets   : 2,
                // className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.stock_inventory < row.minimum_inventory){
                        return `<span class="badge badge-danger">${row.stock_inventory}</span>`;
                    }if (row.stock_inventory == row.minimum_inventory){
                        return `<span class="badge badge-warning">${row.stock_inventory}</span>`;
                    } else {
                        return `<span class="badge badge-success">${row.stock_inventory}</span>`;
                    }
                }
            },
            {
                //PRECIO
                targets: 3,
                className : 'dt-head-right dt-body-right',
                render    : function (data, type, row) {
                    return `$${Number(row.price_product_inventory).toFixed(2)}`;
                }
            },
            {
                //PROMOCION
                targets: 3,
                className : 'dt-head-right dt-body-right',
                render    : function (data, type, row) {

                    if (row.discount_product_inventory == null || row.discount_product_inventory == 0 ) {
                        return `<span class="badge badge-light-warning">--</span>`;
                    } else {
                        let resta = row.price_product_inventory - row.discount_product_inventory;
                        let division = row.price_product_inventory / resta;
                        let porcentaje = 100/division;
                        return `$${Number(row.discount_product_inventory).toFixed(2)}
                        <span class="badge badge-light-info">-${porcentaje.toFixed(0)}%</span>
                        `;
                    }

                }
            },
            {
                //DIVISION
                targets: 4,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    return `${row.division.abrv}`;
                }
            },
            {
                //CATEGORIA
                targets: 5,
                render: function (data, type, row) {
                    return `${row.category.name}`;
                }
            },
            {
                //UBICACION
                targets: 6,
                render: function (data, type, row) {
                    if (row.levelarea == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `${row.levelarea.name}`;
                    }
                }
            },
            // {
            //     //SKU
            //     targets: 7,
            //     render: function (data, type, row) {
            //         return `<span style="text-transform:uppercase">${row.sku_product_inventory}</span>`;
            //     }
            // },
            {
                //CODIGO DE BARRAS
                targets: 7,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    if (row.barcode_product_inventory <= 75022) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `<span class="badge badge-light-info" style="text-transform:uppercase">${row.barcode_product_inventory}</span>`;
                    }
                }
            },
            // {
            //     //PROVEEDORES
            //     targets: 9,
            //     render: function (data, type, row) {
            //         // return `${row.id}`;
            //         return `${row.provider.name} ${row.provider.last_name}`;
            //     }
            // },
            {
                //MARCA
                targets: 7,
                render: function (data, type, row) {
                    return `${row.brand.name}`;
                }
            },
            // {
            //     //LINE_ID
            //     targets: 11,
            //     render: function (data, type, row) {
            //         return `${row.umedida.name}`;
            //     }
            // },
            // {
            //     //TAMAÑO
            //     targets: 8,
            //     render: function (data, type, row) {
            //         return `${row.size.name}`;
            //     }
            // },
            // {
            //     //TIPO MATERIAL
            //     targets: 10,
            //     render: function (data, type, row) {
            //         if (row.typematerial == null) {
            //             return `<span class="badge badge-light-danger">--</span>`;
            //         } else {
            //             return `${row.typematerial.name}`;
            //         }

            //     }
            // },
            // {
            //     //U SAT
            //     targets: 8,
            //     render: function (data, type, row) {
            //         return `${row.satkeyunidad.key}`;
            //     }
            // },
            // {
            //     //P SAT
            //     targets: 9,
            //     render: function (data, type, row) {
            //         return `${row.clasesat.key}`;
            //     }
            // },
            // {
            //     //LINE_ID
            //     targets: 8,
            //     render: function (data, type, row) {
            //         return `${row.minimum_inventory}`;
            //     }
            // },
            // {
                //INVENTARIO MINIMO
            //     targets: 17,
            //     className : 'dt-head-center dt-body-center',
            //     render    : function (data, type, row) {
            //         return `$${Number(row.unit_cost_inventory).toFixed(2)}`;
            //     }
            // },
            {
                //NAME
                targets   : 8,
                render    : function (data, type, row) {
                    if (row.status == 1) {
                        return `<span class="badge badge-light-success">Activo</span>`;
                    }if (row.status == 2){
                        return `<span class="badge badge-light-danger">Rechazado</span>`;
                    }if (row.status == 3){
                        return `<span class="badge badge-light-info">Inactivo</span>`;
                    }if (row.status == 0){
                        return `<span class="badge badge-light-warning">Revisión</span>`;
                    } else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //ACCIONES
                targets: 9,
                data: null,
                orderable: false,
                className: 'text-end',
                render: function (data, type, row) {
                    return `
                        <button type="button" data-id="${row.id}" class="btn btn-icon btn-light-warning update_product"><i class="bi bi-pencil "></i></button>
                        <button type="button" data-id="${row.id}" data-name="${row.name_product_inventory}" class="btn btn-icon btn-light-danger delete_product"><i class="bi bi-trash fs-2 me-2"></i></button>
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

    let updateProduct = function () {
        $(document).on('click','.update_product',function(){
            let id = $(this).data('id');
            $.ajax({
                url         : `/productos/editar/${id}`,
                dataType    : 'json',
                contentType : false,
                processData : false,
                type        : 'GET',
            }).done(function(response){
                if(!response.error){
                    $('#edit_product_modal').empty();
                    $('#edit_product_modal').append(response.render);
                    $('#kt_modal_edit_product').modal('show');
                } else {
                    // Colocar mensaje en caso de error
                }
            });
        });
    }

    // Delete
    let deleteProduct = function () {
        $(document).on('click','.delete_product',function(){
            let id   = $(this).data('id');
            let name = $(this).data('name');
            Swal.fire({
                text: `¿Estas seguro de querer eliminar el producto ${name}?`,
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
                        url         : '/productos/delete/'+ id,
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
            updateProduct(); // Update product
            deleteProduct(); // Delete product

        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
