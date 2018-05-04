$(document).ready(function() {
    $("#in_stock").change(function () {
        $("#stock_number").toggle();
    }); 

    $('[data-toggle="tooltip"]').tooltip(); 
      
});

