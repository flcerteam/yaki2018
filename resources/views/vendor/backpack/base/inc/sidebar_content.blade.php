<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li class="treeview">
  <a href="#"><i class="fa fa-database" aria-hidden="true"></i> <span>{{ trans('common.dataManagement') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('branch') }}"><i class="fa fa-building" aria-hidden="true"></i> <span>{{ trans('branch.branches') }}</span></a></li>
    <li><a href="{{ backpack_url('unit') }}"><i class="fa fa-balance-scale" aria-hidden="true"></i> <span>{{ trans('unit.units') }}</span></a></li>
    <li><a href="{{ backpack_url('category') }}"><i class="fa fa-bars" aria-hidden="true"></i> <span>{{ trans('category.categories') }}</span></a></li>
  </ul>
</li>

<li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
