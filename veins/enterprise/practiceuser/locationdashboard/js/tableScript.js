$(".checkIcon").click(function(){
    $("tr").removeClass('selectedRow');
    $(this).closest("tr").addClass('selectedRow');
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

