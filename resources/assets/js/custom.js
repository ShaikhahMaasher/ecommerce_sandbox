$(document).ready(function() {
    $("#in_stock").change(function () {
        $("#stock_number").toggle();
    }); 

    $('[data-toggle="tooltip"]').tooltip(); 
      
    $(".upload-featured, #preview-img").click(function () {
        $("#featured-img").prop('disabled', false);            
        document.getElementById('featured-img').click();          
    });

    $('.remove-img').click(function() {
        $("#featured-img").prop('disabled', true);
        $('#preview-img').attr('src', ''); 
        $('.upload-featured').show();                                                    
        $(this).hide(); 
    });

    $('#remove-feature-id').click(function() {
        $("#featured-img").prop('disabled', true);
        $('#preview-img').attr('src', ''); 
        $('.upload-featured').removeClass('hide');                                     
        var product_id = $(this).data('id');
        $.ajax({
            type : 'POST',
            url : '/admin/products/delete_feature',                
            data : {
                '_token': $('input[name=_token]').val(),
                'id': product_id
            },
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log(data);                    
            }
        });
        $(this).hide();
    });
});


