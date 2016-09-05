$(document).ready(function() {
    // Initiating The Summer note class
    $('.aston-summernote').summernote();

    // Initiating The Data tables  class
    $('.aston-datatable').DataTable({responsive: true});



    $('.aston-select2').select2({
        placeholder: "Select a Subject"
    });

   
    // Initiating The Bootstrap file input class
    $('.aston-image').fileinput();
    $('.aston-image-edit').fileinput({
        defaultPreviewContent: '<img src="/image/'+image+'" alt="Your Avatar" style="width:160px">'});
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

