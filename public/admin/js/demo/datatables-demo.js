// Call the dataTables jQuery plugin
$(document).ready(function() {
    var table = $('#dataTable').dataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    });
 
    table.buttons().container().appendTo( '#dataTable .col-md-6:eq(0)' );
} );