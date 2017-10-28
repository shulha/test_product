/**
 * create product (create.blade.php)
 */
$(document).on('click','.save_product',function(e) {
    var data = new Object();
    data.name = $('#name').val();
    data.programId = Number($('#programId').val());
    data.programName = $('#programName').val();
    data.price = Number($('#price').val());
    data.currency = $('#currency').val();
    data.description = $('#description').val();
    data.manufacturer = $('#manufacturer').val();
    data.ean = Number($('#ean').val());
    data.image = $('#image').val();
    data.priceOld = Number($('#priceOld').val());
    data.shippingCosts = $('#shippingCosts').val();
    data.merchantCategory = $('#merchantCategory').val();
    data.merchantEmail = $('#merchantEmail').val();
    $.ajax({
        method: 'POST',
        url:'api/store',
        data: data,
        dataType: 'json',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response)
        {
            console.log(response);
            alert("Your product has been created!");
        },
        error: function(data)
        {
            var response = JSON.parse(data.responseText);
            var errorString = '<ul>';
            $.each( response.errors, function( key, value) {
                errorString += '<li>' + value + '</li>';
            });
            errorString += '</ul>';
            $('#my_div').html(errorString);
            if( data.status === 500 ) {
                $('#my_div').html('Something went wrong! Numeric fields are empty!');
            }
        }
    });
});

/**
 * delete product (index.blade.php)
 */
$(document).on('click','.del_product',function() {
    var id = parseInt($(this).attr('id'));
    var confirm_var=confirm('Delete product?');
    if (!confirm_var) return false;
    $.ajax({
        url:'api/delete/'+id,
        method: 'DELETE',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(msg)
        {
            $("div#product-" + id +"").remove();
        },
        error: function(msg)
        {
            console.log(msg);
        }
    });
});