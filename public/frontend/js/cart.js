/**
 * Created by jackn on 2018-01-08.
 */
// cookie value format
// items[0] = id
// items[1] = name
// items[2] = thumb
// items[3] = price
// items[4] = num

$(document).ready(function(){

    var arr_cookie = getCookies('cosmetic.cart', '');
    if(arr_cookie != '' && arr_cookie != undefined){
        for(var i = 0; i < arr_cookie.length; i++){
            var items = arr_cookie[i].split('||');
            var str_li =    '<li class="item first cart_item_'+ items[0] +'" >' +
                '<div class="item-inner"> <a class="product-image" title="'+ items[1] +'" href="single_product.html"><img alt="'+ items[1] +'" src="'+ items[2] +'"> </a>' + ///public/frontend/images/products/img01.jpg
                '<div class="product-details">' +
                '<div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#" onclick="delCookie('+ items[0] +')">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>' +
                '<p class="product-name"><a href="#">'+ items[1] +'</a> </p>' +
                '<strong id="num_for_'+ items[0] +'">'+ items[4] +'</strong> x <span class="price">'+ items[3] +'</span> </div>' +
                '</div>' +
                '</li>';

            $('#cart-sidebar').append(str_li);

            if( $('#content_cart').length ){
                var str_tr =    '<tr class="cart_item_' + items[0] + '">' +
                                '<td class="cart_product"><a href="#"><img src="'+ items[2] +'" alt="Product"></a></td>' +
                                    '<td class="cart_description"><p class="product-name"><a href="#"> '+ items[1] +' </a></p></td>' +
                                '<td class="cart_avail"><span class="label label-success">In stock</span></td>' +
                                '<td class="price"><span>'+ items[3] +'</span></td>' +
                                '<td class="qty"><input id="cart_num_' + items[0] + '" class="form-control input-sm" type="text" value="'+ items[4] +'">' +
                                    '<a onclick=" decCartNumWithId(' + items[0] + ') "><i class="fa fa-minus"></i></a> <a onclick=" incCartNumWithId(' + items[0] + ') "><i class="fa fa-plus"></i></a></td>' +
                                    '<td class="price"><span id="total_price_' + items[0] + '">'+ ( Number(items[3]) *  Number(items[4]) ) +'</span></td>' +
                                '<td class="action"><a href="#" onclick=" delCookie('+ items[0] +') ">Delete item</a></td>' +
                                '</tr>';
                $('#content_cart').append(str_tr);
            }
        }
    }
});

function handleCart(){
    var values = getCookies('cosmetic.cart');
    if(values == '' || values == undefined || values == null) return alert('Không có sản phẩm nào trong giỏ hàng');
    var json = {};
    for(var i = 0; i < values.length; i++){
        var items = values[i].split('||');
        json[items[0]] = items[4];
    }
    //console.log(JSON.stringify(json));
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#cart_submit').attr('disabled', true);
    $.post(
        '/handle/handle-cart',
        {
            _token: CSRF_TOKEN,
            json_data : JSON.stringify(json)
        },
        function(data, status){
            var json_data = JSON.parse(data);
            var info = json_data.msg
            for(var i = 0; i < info.length; i++){
                delCookie(info[i].id);
            }
            console.log(json_data.total_price);
        }
    );

    return false;
}

// function handleCart(){
//     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//     $.post(
//         '/handle/handle-cart',
//         {
//             _token: CSRF_TOKEN,
//         },
//         function(data, status){
//             console.log(data);
//         }
//     );
// }

function addProductToCart(id, num){
    var full_name = 'cosmetic.cart.' + id;
    var cvalue = getCookie(full_name);
    if(cvalue) {
        var old_value = cvalue.split('||');
        var new_num = Number(old_value[4]) + Number(num);
        var new_value = encodeURIComponent( old_value[0] + '||' + old_value[1] + '||' + old_value[2] + '||' + old_value[3] + '||' + new_num );
        setCookie(full_name, new_value, 1);
        $('#num_for_' + old_value[0]).text(new_num);
        updateHtmlTotal();
    }else {
        $.get('/handle/get-product-json-for-cart/' + id,
            function (data, status) {
                var json_data = JSON.parse(data);
                var str_li = '<li class="item first cart_item_' + json_data.id + '" id="">' +
                    '<div class="item-inner"> <a class="product-image" title="' + json_data.name + '" href="single_product.html"><img alt="' + json_data.name + '" src="' + json_data.thumb + '"> </a>' + ///public/frontend/images/products/img01.jpg
                    '<div class="product-details">' +
                    '<div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#" onclick="delCookie(' + json_data.id + ')">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>' +
                    '<p class="product-name"><a href="#">' + json_data.name + '</a> </p>' +
                    '<strong id="num_for_' + json_data.id + '">' + num + '</strong> x <span class="price">' + json_data.price + '</span> </div>' +
                    '</div>' +
                    '</li>';

                $('#cart-sidebar').append(str_li);

                if( $('#content_cart').length ){
                    var str_tr =    '<tr class="cart_item_' + json_data.id + '">' +
                        '<td class="cart_product"><a href="#"><img src="'+ json_data.thumb +'" alt="Product"></a></td>' +
                        '<td class="cart_description"><p class="product-name"><a href="#"> '+ json_data.name +' </a></p></td>' +
                        '<td class="cart_avail"><span class="label label-success">In stock</span></td>' +
                        '<td class="price"><span>'+ json_data.price +'</span></td>' +
                        '<td class="qty"><input id="cart_num_' + json_data.id + '" class="form-control input-sm" type="text" value="'+ num +'">' +
                        '<a onclick=" decCartNumWithId(' + json_data.id + ') "><i class="fa fa-minus"></i></a> <a onclick=" incCartNumWithId(' + json_data.id + ') "><i class="fa fa-plus"></i></a></td>' +
                        '<td class="price"><span id="total_price_' + json_data.id + '">'+ ( Number(json_data.price) *  Number(num) ) +'</span></td>' +
                        '<td class="action"><a href="#" onclick=" delCookie('+ json_data.id +') ">Delete item</a></td>' +
                        '</tr>';
                    $('#content_cart').append(str_tr);
                }

                var cname = 'cosmetic.cart.' + json_data.id;
                var cvalue = encodeURIComponent(json_data.id + '||' + json_data.name + '||' + json_data.thumb + '||' + json_data.price + '||' + num);
                setCookie(cname, cvalue, 1);
                updateHtmlTotal();
                // console.log(v.name);     id="cart-sidebar"
                // $.each(v, function(index, element){
                //     console.log(element.name);
                // })
                //console.log(getCookies('cosmetic.cart'));
            });
    }

}

function delCookie(id){
    var full_name = 'cosmetic.cart.' + id;
    setCookie(full_name, 'null', -2);
    $( '.cart_item_' + id ).remove();

}

function updateHtmlTotal(){
    getCookies('cosmetic.cart', 'total');
}

function setCookie(cname, cvalue, exdays){
    var d = new Date();
    d.setTime( d.getTime() + (exdays * 24 * 60 *60 *1000) );
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
}

function getCookie(full_name){
    var name = full_name;
    var arr_cookie = document.cookie.split(';');
    for(var i = 0; i < arr_cookie.length; i++) {
        var cookie_item = arr_cookie[i].split('=');
        if (cookie_item[0].indexOf(name) >= 0) {
            var data = decodeURIComponent(cookie_item[1]);
            return data;
        }
    }
    return false;
}

function getCookies(cname, type) {
    var name = cname;
    var arr_cookie = document.cookie.split(';');
    var value = [];
    var totalNum = 0;
    var totalPrice = 0;
    for(var i = 0; i < arr_cookie.length; i++) {
        var cookie_item = arr_cookie[i].split('=');
        if (cookie_item[0].indexOf(name) >= 0) {
            var data = decodeURIComponent(cookie_item[1]);
            value.push(data);

            var items = data.split('||');
            totalNum += Number(items[4]);
            totalPrice = totalPrice + ( Number(items[3]) * Number(items[4]) );
        }
    }
    $('#cart_total_num').text(totalNum);
    $('.cart_total_price').text(totalPrice);
    if(type == 'total') {
        return true;
    } else {
        return value;
    }
}

function checkCookie(full_name){
    var name = full_name;
    var arr_cookie = document.cookie.split(';');
    for(var i = 0; i < arr_cookie.length; i++) {
        var cookie_item = arr_cookie[i].split('=');
        if (cookie_item[0].indexOf(name) >= 0) {
            return true;
        }
    }
    return false;
}

function decCartNumWithId(id){
    var num = Number( getCartNumWithId(id) ) - 1;
    if(num < 1)
        return false;
    else {
        updateNum(id, num);
    }
}

function incCartNumWithId(id){
    var num = Number( getCartNumWithId(id) ) + 1;
    if(num > 100)
        return false;
    else {
        updateNum(id, num);
    }
}

function getCartNumWithId(id){
    var num = $('#cart_num_' + id).val();
    return num;
}

function updateNum(id, num){
    var name = 'cosmetic.cart.' + id;
    var data = getCookie(name);
    var datas = data.split('||');
    var new_data = encodeURIComponent( datas[0] + '||' + datas[1] + '||' + datas[2] + '||' + datas[3] + '||' + num );
    setCookie(name, new_data, 1);
    $('#total_price_' + id).text( Number(datas[3]) * Number(num) );
    $('#cart_num_' + id).val( Number(num) );
    getCookies('cosmetic.cart', 'total');
}