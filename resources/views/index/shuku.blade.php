@include('public.head')
<div class="mod-wrapper lit-nav" data-effect="ceiling" data-start-at="28" data-class-name="nav-fixed">
  <div class="mod-con clearfix">
    <div class="fl">
      <a class="lit-logo" href="//zzn.zhaozening.cn/" rseat="wenxue_logo" title="爱奇艺文学"></a>
    </div>
    <div class="fl nav-con" id="navWxWrap" data-page-current="stacks">
      <ul class="nav-list clearfix">
        <li>
          <a href="//zzn.zhaozening.cn" title="首页">首页</a>
        </li>
        <li class="selected">
          <a href="javascript:;" title="书库">书库</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/rankList" title="排行">排行</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/bookRack" title="书架">书架</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/app" title="客户端">客户端</a>
        </li>
        <li>
          <a href="http://mp.iqiyi.com/writer" title="作者专区">作者专区</a>
        </li>
      </ul>
    </div>@include('public.sousuo')
  </div>
</div><!-- 筛选项：频道+分类 -->
<div class="mod-wrapper">
  <div class="mod-con pr clearfix">
    <div class="con-side J_filter_fixed">
      <div class="filter-wrapper" style="position: absolute;">
        <div class="filter-con">
          <h4>频道</h4>
          <ul class="filter-list clearfix">
            @foreach ($data['pindao'] as $key => $pindao)
            @if ($data['moren1'] == $key)
            <li class="selected" data-target="pindao" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$pindao}}</a>
            </li>
            @else
            <li class="" data-target="pindao" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$pindao}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
        <div class="filter-con">
          <h4>分类</h4>
          <ul class="filter-list J_catalist clearfix" data-second-index="0">
            @foreach ($data['fenlei'] as $key => $fenlei)
            @if ($data['moren2'] == $key)
            <li class="selected" data-target="fenlei" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$fenlei}}</a>
            </li>
            @else
            <li class="" data-target="fenlei" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$fenlei}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
        <div class="filter-con filter-con-state">
          <h4>状态</h4>
          <ul class="filter-list clearfix">
            @foreach ($data['zhuangtai'] as $key => $zhuangtai)
            @if ($data['moren3'] == $key)
            <li class="selected" data-target="zhuangtai" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$zhuangtai}}</a>
            </li>
            @else
            <li class="" data-target="zhuangtai" id="{{$key}}">
              <a class="tijiao" href="javascript:void(0);">{{$zhuangtai}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="con-main">
      <!-- 筛选菜单 -->
      <div class="filter-menu">
        <ul class="clearfix">
          <li class="filter-summary">排序</li>
          @foreach ($data['paixu'] as $key => $paixu)
          @if ($data['moren4'] == $key)
          <li class="selected" data-target="paixu" id="{{$key}}">
            <a class="tijiao" href="javascript:void(0);">{{$paixu}}</a>
          </li>
          @else
          <li class="" data-target="paixu" id="{{$key}}">
            <a class="tijiao" href="javascript:void(0);">{{$paixu}}</a>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
      <div class="filter-main fl" data-resultnum="21330">
        <ul class="stacksList">
          @foreach ($data['book'] as $book)
          <li class="stacksBook">
            <div class="stacksBook-con pr">
              <div class="stacksBookCover">
                <a href="{{$book['url']}}" title="{{$book['name']}}" target="_blank"><img src="{{$book['img']}}" alt="{{$book['name']}}" /></a>
              </div>
              <div class="stacksBook-info">
                <h3 class="stacksBook-tit"><a href="{{$book['url']}}" title="{{$book['name']}}" target="_blank">{{$book['name']}}</a>
                  @if ($book['zhuangtai'] == '完结')
                 <span class="stacksBook-tag tag-end">
                  @else 
                  <span class="stacksBook-tag tag-serial">
                  @endif
                 {{$book['zhuangtai']}}</span></h3>
                <p class="stacksBook-about"><label>作者：</label><em class="writerName">{{$book['writerName']}}</em> <a href="{{$book['url']}}" title="{{$book['fenlei']}}">{{$book['fenlei']}}</a> <em>{{$book['size']}}</em></p>
                <p class="stacksBook-details">{{$book['detail']}}</p>
                <p class="stacksBook-newchapter"><a href="{{$book['url']}}" title="{{$book['newchapter']}}" target="_blank">最新章节：{{$book['newchapter']}}</a></p>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="mod-page">
          <span class="noPage">上一页</span> <span data-key="1" class="curPage">1</span> <a title="跳转至第2页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-2.html">2</a> <a title="跳转至第3页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-3.html">3</a> <a title="跳转至第4页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-4.html">4</a> <a title="跳转至第5页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-5.html">5</a> <a title="跳转至第6页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-6.html">6</a> <a title="跳转至第7页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-7.html">7</a> <a title="跳转至第8页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-8.html">...</a> <a title="跳转至第1066页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-1066.html">1066</a> <a title="跳转至第1067页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-1067.html">1067</a> <a class="a1" title="跳转至第2页" href="//zzn.zhaozening.cn/book/lib-18l2g48o37_0_0-51-0-2.html">下一页</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/cookies.js"></script>
<script>
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
            setCookie('fenlei', "{{$data['moren2']}}");
            setCookie('zhuangtai', "{{$data['moren3']}}");
            setCookie('paixu', "{{$data['moren4']}}");
            break;
        case 'fenlei':
            fenlei = newselected;
            setCookie('pindao', "{{$data['moren1']}}");
            setCookie('fenlei', newselected);
            setCookie('zhuangtai', "{{$data['moren3']}}");
            setCookie('paixu', "{{$data['moren4']}}");
            break;
        case 'zhuangtai':
            zhuangtai = newselected;
            setCookie('pindao', "{{$data['moren1']}}");
            setCookie('fenlei', "{{$data['moren2']}}");
            setCookie('zhuangtai', newselected);
            setCookie('paixu', "{{$data['moren4']}}");
            break;
        case 'paixu':
            paixu = newselected;
            setCookie('pindao', "{{$data['moren1']}}");
            setCookie('fenlei', "{{$data['moren2']}}");
            setCookie('zhuangtai', "{{$data['moren3']}}");
            setCookie('paixu', newselected);
            break;
        }
        window.location.replace("//zzn.zhaozening.cn/shuku");
    }
    );
}
);
</script>
</body>
</html>