//statistic report
$('#statisticReportsTable, #authorizedUsersTable').DataTable(
    {
       "aaSorting": [],
       "columnDefs": [
        { 
            "targets": [0], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

$(document).ready(function() {
    $('.selectTables').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'multi',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );
} );

$(document).ready(function() 
{
    $('.datatables').DataTable();
});

//solution for full width thead
$('#tabs').tabs({
   activate: function(event, ui) { 
      $($.fn.dataTable.tables(true)).DataTable()
         .columns.adjust()
         .responsive.recalc(); 
   }
});
//stage display
$(document).ready(function () {
    $('#d1').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": false,
    "bInfo": false,
    "bAutoWidth": true ,
    });
    $('.dataTables_length').addClass('bs-select');
    });

//pt id 
$(document).ready(function () {
    $('#myPatientTable, #veinsPatientTable').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": true,
    "sorting": false,
    "bAutoWidth": false ,
    });
    $('.dataTables_length').addClass('bs-select');
    });


