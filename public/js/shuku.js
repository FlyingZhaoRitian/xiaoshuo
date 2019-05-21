
$(document).ready(function ()
{
    $(".tijiao").on("click", function ()
    {
        newselected = $(this).parent('li').attr('id');
        type = $(this).parent('li').attr('data-target');
        switch (type)
        {
        case 'pindao':
            pindao = newselected;
            setCookie('pindao', newselected);
            setCookie('fenlei', getCookie('fenlei'));
            setCookie('zhuangtai', getCookie('zhuangtai'));
            setCookie('paixu', getCookie('paixu'));
            break;
        case 'fenlei':
            fenlei = newselected;
            setCookie('pindao', getCookie('pindao'));
            setCookie('fenlei', newselected);
            setCookie('zhuangtai', getCookie('zhuangtai'));
            setCookie('paixu', getCookie('paixu'));
            break;
        case 'zhuangtai':
            zhuangtai = newselected;
            setCookie('pindao', getCookie('pindao'));
            setCookie('fenlei', getCookie('fenlei'));
            setCookie('zhuangtai', newselected);
            setCookie('paixu', getCookie('paixu'));
            break;
        case 'paixu':
            paixu = newselected;
            setCookie('pindao', getCookie('pindao'));
            setCookie('fenlei', getCookie('fenlei'));
            setCookie('zhuangtai', getCookie('zhuangtai'));
            setCookie('paixu', newselected);
            break;
        }
        window.location.replace("//zzn.zhaozening.cn/shuku");
    }
    );
}
);
