<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li class="treeview">
  <a href="#"><i class="fa fa-database" aria-hidden="true"></i> <span>{{ trans('common.dataManagement') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('branch') }}"><i class="fa fa-building" aria-hidden="true"></i> <span>{{ trans('branch.branches') }}</span></a></li>
    <li><a href="{{ backpack_url('unit') }}"><i class="fa fa-balance-scale" aria-hidden="true"></i> <span>{{ trans('unit.units') }}</span></a></li>
    <li><a href="{{ backpack_url('category') }}"><i class="fa fa-bars" aria-hidden="true"></i> <span>{{ trans('category.categories') }}</span></a></li>
    <li><a href="{{ backpack_url('product') }}"><i class="fa fa-dropbox" aria-hidden="true"></i> <span>{{ trans('product.products') }}</span></a></li>
    <li><a href="{{ backpack_url('member') }}"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span>{{ trans('member.members') }}</span></a></li>
    <li><a href="{{ backpack_url('event') }}"><i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ trans('event.events') }}</span></a></li>
  </ul>
</li>

<li class="treeview">
  <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>{{ trans('common.saleManagement') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('reservation-table') }}"><i class="fa fa-sticky-note" aria-hidden="true"></i> <span>{{ trans('rt.reservation_tables') }}</span></a></li>
    <li><a href="{{ backpack_url('order') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>{{ trans('order.orders') }}</span></a></li>
  </ul>
</li>

<li class="treeview">
  <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> <span>{{ trans('common.systemManagement') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('menu') }}"><i class="fa fa-tasks" aria-hidden="true"></i> <span>{{ trans('menu.menus') }}</span></a></li>
    <li><a href="{{ backpack_url('yaki-images') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
  </ul>
</li>