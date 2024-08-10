$(document).ready(function () {
    var title = $('input[name="title"]').val();
    var file = $('input[name="file"]').val();
    $("#datatable-buttons").DataTable({ 
        engthChange: !1,
        sorting: [],
        pageLength: 25,
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> &nbsp; Export Excel',
                filename: file,
                title: title,
                className: 'btn-success',
                // customizeData: function (data) {
                //     for (var i = 0; i < data.body.length; i++) {
                //       for (var j = 0; j < data.body[i].length; j++) {
                //         var cell = data.body[i][j];
                //         if (typeof cell === 'number') {
                //           data.body[i][j] = cell.toString();
                //         }
                //       }
                //     }
                //   },
                exportOptions: {
                    columns: ':not(:nth-child(6))'
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> &nbsp; Export PDF',
                filename: file,
                title: title,
                className: 'btn-danger',
                customize: function(doc) {
                    var tables = doc.content.filter(function(item) {
                        return item.table !== undefined;
                    });
                    tables.forEach(function(table) {
                        table.table.widths = Array(table.table.body[0].length + 1).join('*').split('');
                        for (var i = 0; i < table.table.body.length; i++) {
                            for (var j = 0; j < table.table.body[i].length; j++) {
                                table.table.body[i][j].alignment = 'center';
                            }
                        }
                    });
                },
                exportOptions: {
                    columns: ':not(:nth-child(6))'
                }
            },
        ] 
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
    $(".dataTables_length select").addClass("form-select form-select-sm");
});
