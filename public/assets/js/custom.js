$(document).ready(function(){
$(".delete-btn"). click(function() {
    $('#imagePreview').css('background-image', 'url(assets/images/thumbnail.png)');
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
});
$(document).ready(function(){
    $(".delete-btn"). click(function() {
        $('#customerimagePreview').css('background-image', 'url(assets/images/thumbnail.png)');
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#customerimagePreview').css('background-image', 'url('+e.target.result +')');
                $('#customerimagePreview').hide();
                $('#customerimagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#customerimageUpload").change(function() {
        readURL(this);
    });
    });
$(document).ready(function() {
    $('.select-custom-design').select2();
});
$(document).ready(function() {
    $('.search-toggle').click(function(){
        $('.search-form').addClass('active');
    });
    $('.close-search').click(function(){
        $('.search-form').removeClass('active');
    });
});


 
