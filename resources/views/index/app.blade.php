@include('public.head')
<div class="mod-wrapper lit-nav" data-effect="ceiling" data-start-at="28" data-class-name="nav-fixed">
  <div class="mod-con clearfix">
    <div class="fl">
      <a class="lit-logo" href="//wenxue.iqiyi.com/" rseat="wenxue_logo" title="爱奇艺文学"></a>
    </div>
    <div class="fl nav-con" id="navWxWrap" data-page-current="rank">
      <ul class="nav-list clearfix">
        <li>
          <a href="//zzn.zhaozening.cn" title="首页">首页</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/shuku" title="书库">书库</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/rankList" title="排行">排行</a>
        </li>
        <li>
          <a href="//zzn.zhaozening.cn/bookRack" title="书架">书架</a>
        </li>
        <li class="selected">
          <a href="javascript:;" title="客户端">客户端</a>
        </li>
        <li>
          <a href="http://mp.iqiyi.com/writer" title="作者专区">作者专区</a>
        </li>
      </ul>
    </div>
    @include('public.sousuo')
  </div>
</div>