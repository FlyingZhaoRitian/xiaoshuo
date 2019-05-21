$(document).ready(function ()
{
    var hist = 1;
    var hist1 = 1;
    var hist2 = 1;
    $(".booklist-fine ul li a").hover(function ()
    {
        var a = $(this).parent().attr("data-target");
        last = a[a.length - 1];

        $("#jp-book-" + hist + "").attr("class", "booklist-fine-con");
        $("#jp-book1-" + hist + "").attr("class", "booklist-f-item");
        $("#jp-book-" + last + "").attr("class", "booklist-fine-con selected");
        $("#jp-book1-" + last + "").attr("class", "booklist-f-item selected");
    }, function ()
    {
        hist = last;
    }
    );

    $(".booklist-drawer ul li").hover(function ()
    {
        var b = $(this).children('div').attr("id");
        last1 = b[b.length - 1];

        $("#drawer-" + hist1 + "").attr("class", "drawer-item");
        $("#drawer-" + last1 + "").attr("class", "drawer-item selected");
    }, function ()
    {
        hist1 = last1;
    }
    );

    $(".rankTab-wrapper ul li").hover(function ()
    {
        var c = $(this).attr("id");
        last2 = c[c.length - 1];

        $("#rank-" + hist2 + "").attr("class", "rankTab");
        $("#rank1-" + hist2 + "").attr("class", "rankTab-con");
        $("#rank-" + last2 + "").attr("class", "rankTab selected");
        $("#rank1-" + last2 + "").attr("class", "rankTab-con selected");
    }, function ()
    {
        hist2 = last2;
    }
    );
    var aa = new zturn(
        {
            id: "zturn",
            opacity: 0.9,
            width: 200,
            Awidth: 850,
            scale: 0.9,
            auto: true, //是否轮播 默认5000
            turning: 2000 //轮播时长
        }
        )
}
);
