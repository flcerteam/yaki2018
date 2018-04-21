<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>Data Master</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('category') }}"><i class="fa fa-bars"></i> <span>{{ trans('category.categories') }}</span></a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/users') }}"><i class="fa fa-user"></i> <span>{{ trans('user.users') }}</span></a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>

<li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
