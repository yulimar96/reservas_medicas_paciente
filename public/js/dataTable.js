$(document).ready(function () {
    $(".userTest")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            language: {
                sEmptyTable: "No hay datos disponibles en la tabla",
                sInfo: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                sInfoEmpty: "Mostrando 0 a 0 de 0 entradas",
                sInfoFiltered: "(filtrado de _MAX_ entradas totales)",
                sLengthMenu: "Mostrar _MENU_ entradas",
                sLoadingRecords: "Cargando...",
                sProcessing: "Procesando...",
                sSearch: "Buscar:",
                sZeroRecords: "No se encontraron resultados",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "Siguiente",
                    sPrevious: "Anterior",
                },
                oAria: {
                    sSortAscending:
                        ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending:
                        ": Activar para ordenar la columna de manera descendente",
                },
            },
            buttons: [
                {
                    extend: "copy",
                    text: "Copiar",
                    className: "btn btn-primary",
                },
                { extend: "csv", text: "CSV", className: "btn btn-primary" },
                {
                    extend: "excel",
                    text: "Excel",
                    className: "btn btn-primary",
                },
                { extend: "pdf", text: "PDF", className: "btn btn-primary" },
                {
                    extend: "print",
                    text: "Imprimir",
                    className: "btn btn-primary",
                },
                // { extend: "colvis", text: "Columnas", className: "btn btn-primary" }
            ],
        })
        .buttons()
        .container()
        .appendTo(".userTest_wrapper .col-md-6:eq(0)");
});
