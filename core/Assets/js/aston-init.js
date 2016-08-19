$(document).ready(function() {
    // Initiating The Summer note class
    $('.aston-summernote').summernote();

    // Initiating The Data tables  class
    $('.aston-datatable').DataTable();
});

function toggle()
{
    $('.sidebar').addClass('show');
    $('.cover').addClass('show');
    $('.page').css('padding-left','100px');

}

$('.cover').click(function () {
    $('.sidebar').removeClass('show');
    $('.cover').removeClass('show');
    $('.page').css('padding-left','0px');
});

