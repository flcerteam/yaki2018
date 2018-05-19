@if (null != $menu)
<nav class="navbar navbar-default">
  <div class="row contact-content">
    <div class="col-md-9">
      <ul class="main-nav nav navbar-nav sub-nav-yaki">
      @foreach ($menu->categories as $category)
        <li><a href="{{ route('type', [ str_slug($category->name, '-'), $menu->id, $category->id ]) }}">{{ $category->name }}</a></li> 
      @endforeach
      </ul>
    </div>

    <div class="col-md-3">
      <form  class="form-inline" role="search" method="get" id="searchform" action="/search" style="margin-top: 0.5em !important">
        <div class="beta-comp col-lg-1 col-lg-offset-0 col-xs-10 col-xs-offset-1">
          <input class="form-control" type="text" name="s" id="s" placeholder="Nhập từ khóa" aria-label="Search">
          <input type="submit" style="position: absolute; display:none;"/>
        </div>
      </form>
    </div>
  </div>
</nav>
@endif
