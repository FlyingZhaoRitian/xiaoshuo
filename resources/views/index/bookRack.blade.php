@include('public.head')
<div class="mod-wrapper lit-nav" data-effect="ceiling" data-start-at="28" data-class-name="nav-fixed">
  <div class="mod-con clearfix">
    <div class="fl">
      <a class="lit-logo" href="//zzn.zhaozening.cn/" rseat="wenxue_logo" title="爱奇艺文学"></a>
    </div>
    <div class="fl nav-con" id="navWxWrap" data-page-current="shelf">
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
        <li class="selected">
          <a href="javascript:;" title="书架">书架</a>
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
</div><!-- notice公告 -->
<!-- 通栏广告1 -->
<div class="mod-wrapper">
  <div class="mod-con mt20 mb20">
    <a href="https://wenxue.m.iqiyi.com/act/gechangzuguo/" target="_blank"><img src="picture/79e30b628251493b903746a466a9b3eb.png" alt="文学-PC站-通用-通栏广告1" /></a>
  </div>
</div>
<div class="mod-wrapper">
  <div class="mod-con mt20 mb20">
    <div class="bookshelf-wrapper">
      <div class="shelf-tit clearfix">
        <p class="shelf-titBtn">我的书架</p>
        <p id="bshelf-num" style="display: inline;">共<b id="count">{{$data['count']}}</b>本书</p>
      </div><!-- 未登录 + 已登录无书 加dn隐藏-->
      <div class="shelf-con" style="display: none;" id="bshelf-loginwrap1">
        <dl>
          <dd class="unlogin" data-shelf-elem="unlogin" style="display: none;">
            <p class="shelf-tips">登录后可以将书加入书架哦~</p>
            <p><a class="shelfBtn1" href="javascript:void(0);" data-delegate="login">登录获取书架</a><a class="shelfBtn2" href="//zzn.zhaozening.cn">去首页看看</a></p>
          </dd>
          <dd class="nobook" data-shelf-elem="dnull" style="display: none;">
            <p class="shelf-tips">你还没有藏书，快把喜欢的书加入书架吧~</p>
            <p><a class="shelfBtn2" href="//zzn.zhaozening.cn/">去首页看看</a></p>
          </dd>
          <dd data-shelf-elem="derror" style="display: none;">
            <p class="shelf-tips">数据出错了，请稍后再试~</p>
            <p><a class="shelfBtn2" href="//zzn.zhaozening.cn/">去首页看看</a></p>
          </dd>
          <dd class="mt30" data-shelf-elem="loading" style="display: none;">
            <p class="shelf-tips">努力读取中。。。</p>
          </dd>
        </dl>
      </div><!-- 已登录有书 加dn隐藏-->
      <div class="bookshelf-con" style="display: online;" id="bshelf-wrap1">
        <ul class="bookshelf-list clearfix" data-shelf-elem="list">
          @if ($data['book'] == '' && $data['islogin'] == 0)
          <script type="text/javascript">$(".shelf-con").css("display",'block');$(".unlogin").css("display",'block');$("#count").html(0);</script>
          @elseif ($data['book'] == '' && $data['islogin'] == 1)
          <script type="text/javascript">$(".shelf-con").css("display",'block');$(".nobook").css("display",'block');$("#count").html(0);</script>
          @elseif ($data['book'] != '' && $data['islogin'] == 1)
          @foreach ($data['book'] as $item)
          <li>
            <div class="stacksBook-con pr">
              <div class="stacksBookCover">
                <a href="" title="{{$item['title']}}" target="_blank" rseat="shelf_a_{{$item['js_rIdx']}}"><img src="{{$item['picUrl']}}" alt="{{$item['title']}}" rseat="shelf_img_" /> @if ($item['readingProgress'] && $item['readingProgress'] != "null" && $item['readingProgress'] != "0")<span class="read-schedule" rseat="shelf_schedule_{{$item['js_rIdx']}}">已阅读 {{$item['readingProgress']}}%</span> @endif</a>
              </div>
              <div>
                <h3 class="shelf-book-tit"><a href="//wenxue.iqiyi.com/book/detail-{{$item['bookId']}}.html" target="_blank" title="{{$item['title']}}" rseat="shelf_title_{{$item['js_rIdx']}}">{{$item['title']}}</a></h3>
                <p class="shelf-book-about"><label rseat="shelf_zuozhe_{{$item['js_rIdx']}}">作者：</label><em class="writerName" rseat="shelf_author_{{$item['js_rIdx']}}">{{$item['author']}}</em></p>@if ($item['js_cateId'])
                <p class="shelf-book-about"><label rseat="shelf_fenlei_{{$item['js_rIdx']}}">分类：</label><a href="" rseat="shelf_cate_{{$item['js_rIdx']}}" title="{{$item['js_cateName']}}">{{$item['js_cateName']}}</a></p>@endif @if ($item['lastChapterId'])
                <p class="shelf-book-newchapter"><a href="" target="_blank" rseat="shelf_chapter_{{$item['js_rIdx']}}" title="{{$item['lastChapterTitle']}}">最新章节：{{$item['lastChapterTitle']}}</a></p>@endif
                <p class="btnBox"><a class="shelfBtn3" href="" rseat="shelf_read_{{$item['js_rIdx']}}" target="_blank" title="继续阅读">继续阅读</a> <a href="javascript:%20void(0)" data-idx="{{$item['js_idx']}}" class="shelf-del" data-delegate="book-shelf-del" rseat="shelf_del_{{$item['js_rIdx']}}" title="删除本书">删除本书</a></p>
              </div>
            </div>
          </li>
          @endforeach        
          @endif
        </ul>
        <textarea style="display: none;" data-shelf-elem="tpl"></textarea> <!-- 分页 -->
        <div class="mod-page" data-shelf-elem="page" style="display: none;"></div>
        <div id="shelfDelPop" class="mod-pop-wrapper" style="display: none;">
          <div class="mod-popBg"></div>
          <div class="mod-pop-shelf">
            <h4 class="shelf-pop"></h4>
            <div class="mod-pop-con" data-del-result="tips">
              <p class="book-del">确定删除本书？</p>
              <p class="book-del-btn"><a class="quxiao" href="javascript:%20void(0);" data-pop-elem="no">取消</a> <a class="queren" href="javascript:%20void(0);" data-pop-elem="yes">确认</a></p>
            </div>
            <div class="mod-pop-con" data-del-result="suc" style="display: none;">
              <p class="book-del mt20">已成功删除！</p>
            </div>
            <div class="mod-pop-con" data-del-result="err" style="display: none;">
              <p class="book-del mt20">操作有误，请稍后再试！</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function (){
  $(".shelf-del").on("click",function(){
    $("#shelfDelPop").css('display','block');
    This = $(this);
  });
  $(".quxiao").on("click",function(){
    $("#shelfDelPop").css('display','none');
  });
  $(".queren").on("click",function(){
    This.parent().parent().parent().parent('li').remove();
    count = $("#count").html();
    $("#count").html(count-1);
    $("#shelfDelPop").css('display','none');
    //数据库操作
  });

});
</script>