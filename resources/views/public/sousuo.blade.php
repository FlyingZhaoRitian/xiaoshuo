<div class="fr pr">
  <div class="searchBox" data-url="">
    <input id="searchInput" class="searchInput" type="text" placeholder="自定义热书搜索榜" /> <span id="searchBtn" class="searchBtn" role="button"></span>
  </div>
  <ul class="ser-list dn" id="searchSuggestList"></ul>
  <ul class="ser-list dn" id="searchHotList">
    @foreach ($data['sousuos'] as $a)
    <li>
      <a href="">{{$a}}</a>
    </li>@endforeach
  </ul>
</div>
