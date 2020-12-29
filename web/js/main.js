function openOrder(event){
    event.preventDefault();
    $.ajax({
        url: '/order/open',
        type: 'GET',
        success: function (res) {
            $('#exampleModal .modal-body').html(res);
            $('#exampleModal').modal("show");
            // modal.find('.modal-body').text('test');
        },
        error: function () {
            alert('error');
        }
    })
}

$('.order').on('click', function (event) {
    event.preventDefault();
    // let name = $(this).attr('data-name');
    let id = $(this).data('id');
    $.ajax({
        url: '/order/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            $('#exampleModal .modal-body').html(res);
            let quantity = $('.total-quantity').html();
            $('.menu-total-quantity').html('(' + quantity +')');
            // $('#exampleModal').modal("show");
            // modal.find('.modal-body').text('test');
        },
        error: function () {
            alert('error');
        }
    })
});

function clearOrder(event){
    event.preventDefault();
    if(confirm('Are you sure?')){
        $.ajax({
            url: '/order/clear',
            type: 'GET',
            success: function (res) {
                $('#exampleModal .modal-body').html(res);
            },
            error: function () {
                alert('error');
            }
        })
    }
}
$('#exampleModal').on('click', '.btn-sm', function (event) {
    event.preventDefault();
    let id = $(this).attr('data-id');
    $.ajax({
        url: '/order/delete',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            $('#exampleModal .modal-body').html(res);
            let quantity = $('.total-quantity').html();
            quantity? $('.menu-total-quantity').html('(' + quantity +')'):$('.menu-total-quantity').html(0);
        },
        error: function () {
            alert('error');
        }
    })
});

$('.modal-body').on('click', '.btn-next', function () {
    $.ajax({
        url: '/order/create',
        type: 'GET',
        success: function (res) {
            $('#orderModal .modal-body').html(res);
            $('#exampleModal').modal("hide");
            $('#orderModal').modal("show");
        },
        error: function () {
            alert('error');
        }
    });
});
