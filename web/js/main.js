$('.cart').on('click', function(){
    $('#cart').modal('show');
});

$('.add-to-cart').on('click', function(event){
    event.preventDefault();
    let id = $(this).data('id');

    $.ajax({
        url: '/cart/add',
        data: {id: id},
        type: 'GET',
        //cache: false,
        success: function(res){
            if(!res) alert('ошибка');
            console.log(res);
            $('#cart .modal-body').html(res);
            $('#cart').modal();
        },
        error: function(){
            alert('ошибка');
        }
    })
});