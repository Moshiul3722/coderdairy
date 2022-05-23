
// problem accordion

const accordion = document.getElementsByClassName('accordion_content');

for (let i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click',function(){
        this.classList.toggle('active');
    });

}

// ckeditor


CKEDITOR.replace('solution');

// notification
$('.close-btn').click(function(){
$('.alert').removeClass("show");
$('.alert').addClass("hide");
});

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#thumbnail').on('change', function() {
        $('div.upload_image_preview').html('');
        imagesPreview(this, 'div.upload_image_preview');
    });
});
