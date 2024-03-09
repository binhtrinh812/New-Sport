$(`.more_detail`).click(function() {
    let id = $(this).attr('data-id');

    $.ajax({
        url : './server/get_info_news.php',
        type : 'GET',
        dataType : 'json',
        data : {id : id},

        success : function(result) {
            $('#detail_product .modal-body').html(result);
            console.log(result);

        },
        error : function () {
        }
    })
});





