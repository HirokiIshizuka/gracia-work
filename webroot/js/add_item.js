$(document).on('click','.add_item', function() {
    var product_id = ;
    var content = ;
    $.ajax(
        {
            type: "POST",
            url: "/items/add",
            data: {
                "product_id": product_id,
                "content": content
            },
            dataType: "text",
            success: function (dom)
            {
                //保存完了
                //ここで、返り値（dom）を描画する
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) //通信失敗
            {
                alert('処理できませんでした');
            }
        });
});
