@if (null != $menu)
<nav class="navbar navbar-default">
  <div class="row">
    <div class="col-md-10 col-xs-12">
      <ul class="main-nav nav navbar-nav sub-nav-yaki">
      @foreach ($menu->categories as $category)
        <li><a href="{{ route('type', [ str_slug($category->name, '-'), $menu->id, $category->id ]) }}">{{ $category->name }}</a></li> 
      @endforeach
      </ul>
    </div>

    <div class="col-md-2 col-xs-12">
      <form class="form-search" role="search" method="get" id="searchform" action="/search">
        <input class="form-control" type="text" name="s" id="s" placeholder="Tìm kiếm..." aria-label="Search">
        <input type="submit" style="position: absolute; display:none;"/>
      </form>
    </div>
  </div>
</nav>
@endif
