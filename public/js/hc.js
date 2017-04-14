$(document).ready(function (){
   
   //Click buton thêm mới đồ uống ở màn hình Danh sách đồ uống
    $('button#btnAddNewDrink').click(function (){
        window.location.href = '/Admin/drinks/add-new';
    });
    
    //Lưu thông tin đồ uống mới
    $('button#btnSaveDrink').click(function (){
        if($('input#txtDrinkName').val() === ''){
            $('label#addDrinkMessage').text('Vui lòng nhập tên đồ uống');
            return;
        }
        if($('input#txtPrice').val() === ''){
            $('label#addDrinkMessage').text('Vui lòng nhập đơn giá');
            return;
        }
        $('label#addDrinkMessage').text('');
        $.ajax({
            url: "/Admin/drinks/is-existed",
            type: 'POST',
            data:{
                _token: $('input#csrf-token').val(),
                txtDrinkName: $('input#txtDrinkName').val(),
            },
            success: function (data, textStatus, jqXHR) {
                if(data === 'true'){
                    $('label#addDrinkMessage').text('Tên đồ uống đã tồn tại');
                    return;
                }else{
                    $.ajax({
                        url: "/Admin/drinks/add",
                        type: 'POST',
                        data: {
                            _token: $('input#csrf-token').val(),
                            cobCategory: $('select#cobCategory').val(),
                            txtDrinkName: $('input#txtDrinkName').val(),
                            txtPrice: $('input#txtPrice').val(),
                            txtDescription: $('input#txtDescription').val(),
                            image1: $('input#image1').val(),
                            image2: $('input#image2').val(),
                            image3: $('input#image3').val(),
                            image4: $('input#image4').val(),
                        },
                        success: function (data, textStatus, jqXHR) {
                            
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            
                        }
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                
            }
        });
    });
    /**
     * Thêm dấu "," ngăn cách cụm 3 chữ số trong giá tiền thiết bị
     */
    $("input#txtPrice").keyup(function (event) {
        if (event.which >= 37 && event.which <= 40)
            return;
        $(this).val(function (index, value) {
            return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    ;
        });
    });
});