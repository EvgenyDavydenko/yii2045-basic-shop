$('.cart').on('click', function(){
    $('#cart').modal('show');
});

$('.add-to-cart').on('click', function(event){
    event.preventDefault();
    let id = $(this).data('id');
    console.log(id);

    $.ajax({
        url: '/shop/add',
        data: {id: id},
        type: 'GET',
        success: function(res){
            if(!res) alert('ошибка');
            $('#cart .modal-body').html(res);
        },
        error: function(){
            alert('ошибка');
        }
    })
});