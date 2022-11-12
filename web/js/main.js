$('.cart').on('click', function(){
    $('#cart').modal('show');
});

$('.prod-add').on('click', function(event){
    event.preventDefault();
    let name = $(this).data('name');
    console.log(name);

    $.ajax({
        url: 'shop/add',
        data: {name: name},
        type: 'GET',
        success: function(res){
            $('#cart .modal-body').html(res);
        },
        error: function(){
            alert('ошибка');
        }
    })
});