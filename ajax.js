$(document).ready(function (){
    $('form').submit(function(event){
        event.preventDefault();

        $.ajax({
            type:$(this).attr('method'),
            url: $(this).attr('action'),
            data: new  FormData(this),
            processData: false,
            contentType: false,
            cache: false,

            success: function(result){
                $("#answer" ).text(result);
            },

        });

    });
});
